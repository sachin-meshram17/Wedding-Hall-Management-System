<?php  
error_reporting(E_ALL);  
ini_set('display_errors', 1);  

// Database connection  
$servername = "localhost";  
$username   = "root";  
$password   = "";  
$dbname     = "wedding_hall_management";  

$conn = new mysqli($servername, $username, $password, $dbname);  
if ($conn->connect_error) {  
    die("Connection failed: " . $conn->connect_error);  
}  

// Function to check if a date is booked  
function isDateBooked($conn, $start_date, $end_date)  
{  
    $sql = "SELECT COUNT(*) FROM bookings WHERE (start_date <= ? AND end_date >= ?) OR (start_date <= ? AND end_date >= ?)";  
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $end_date, $start_date, $start_date, $end_date);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_row();
    return $row[0] > 0;  
}  

$booking_error = "";  
$booking_success = "";  

// Initialize variables  
$booking_date = "";  
$fullname = "";  
$email = "";  
$mobile_no = "";  
$start_date = "";  
$end_date = "";  
$event_type = "";
$price = "";  // New variable for event type

// Handle booking submission  
if ($_SERVER["REQUEST_METHOD"] == "POST") {  
    // Get data from the form  
    $booking_date = isset($_POST['booking_date']) ? $_POST['booking_date'] : '';  
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';  
    $email = isset($_POST['email']) ? $_POST['email'] : '';  
    $mobile_no = isset($_POST['mobile_no']) ? $_POST['mobile_no'] : '';  
    $start_date = isset($_POST['start_date']) ? $_POST['start_date'] : '';  
    $end_date = isset($_POST['end_date']) ? $_POST['end_date'] : '';  
    $event_type = isset($_POST['event_type']) ? $_POST['event_type'] : '';
    $price = isset($_POST['price']) ? $_POST['price'] : '';  // Get event type

    // Sanitize inputs  
    $booking_date = htmlspecialchars($booking_date);  
    $fullname = htmlspecialchars($fullname);  
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);  
    $mobile_no = htmlspecialchars($mobile_no);  
    $start_date = htmlspecialchars($start_date);  
    $end_date = htmlspecialchars($end_date);  
    $event_type = htmlspecialchars($event_type);
    $price = htmlspecialchars($price);  // Sanitize event type

    // Basic Validation  
    if (empty($booking_date) || empty($fullname) || empty($email) || empty($mobile_no) || empty($start_date) || empty($end_date) || empty($event_type) || empty($price)) {  
        $booking_error = "Please fill in all required fields.";  
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {  
        $booking_error = "Invalid email format.";  
    } elseif (isDateBooked($conn, $start_date, $end_date)) {  
        $booking_error = "This date is already booked.";  
    } else {  
        // Insert the booking into the database using a prepared statement  
        $sql = "INSERT INTO bookings (fullname, email, booking_date, start_date, end_date, mobile_no, event_type, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";  
        $stmt = $conn->prepare($sql);  

        if ($stmt === false) {  
            die("Prepare failed: " . $conn->error);  
        }  

        $stmt->bind_param("ssssssss", $fullname, $email, $booking_date, $start_date, $end_date, $mobile_no, $event_type, $price);  

        if ($stmt->execute() === TRUE) {  
            $booking_success = "Booking successful!";  
            // Clear fields
            $booking_date = $fullname = $email = $mobile_no = $start_date = $end_date = $event_type = $price = '';
        }
         else {  
            $booking_error = "Error: " . $stmt->error;  
        }  

        $stmt->close();  
    }  
}  

// Get the current month and year  
if (isset($_GET['month']) && isset($_GET['year'])) {  
    $month = $_GET['month'];  
    $year  = $_GET['year'];  
} else {  
    $month = date('n');  
    $year  = date('Y');  
}  

// Get the number of days in the month  
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);  

// Get the first day of the month  
$firstDayOfMonth = date('w', strtotime($year . '-' . $month . '-01'));  

$monthNames = [  
    1 => 'January', 2 => 'February', 3 => 'March', 4 => 'April', 5 => 'May', 6 => 'June',  
    7 => 'July', 8 => 'August', 9 => 'September', 10 => 'October', 11 => 'November', 12 => 'December'  
];  

$dayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];  

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Availability</title>
    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: rgba(253, 111, 111, 0.5); /url('booking_page.jpg') no-repeat center center/cover;/
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            
        }

        h1 {
            margin-top: 20px;
            font-size: 32px;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        .month-navigation {
            display: flex;
            justify-content: space-between;
            width: 50%;
            margin-bottom: 10px;
        }

        .month-navigation a {
            font-size: 18px;
            font-weight: bold;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 8px;
            transition: 0.3s;
        }

        .month-navigation a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .calendar {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .calendar th, .calendar td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        .calendar th {
            background: rgba(0, 0, 0, 0.7);
            color: white;
        }

        .calendar .day {
            cursor: pointer;
            transition: 0.3s;
        }

        .calendar .booked {
            background: #d9534f;
            color: white;
            cursor: not-allowed;
        }

        .calendar .available {
            background: #5cb85c;
            color: white;
        }

        .calendar .available:hover {
            background: #4cae4c;
        }

        .booking-form {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        .booking-form h2 {
            text-align: center;
            margin-bottom: 15px;
            font-size: 24px;
        }

        .booking-form label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .booking-form input, .booking-form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            outline: none;
            transition: 0.3s;
        }

        .booking-form input:focus, .booking-form select:focus {
            border-color: #007bff;
            box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.5);
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .success-message {
            color: green;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .booking-form button {
            background: #007bff;
            color: white;
            font-weight: bold;
            padding: 12px;
            border: none;
            border-radius: 8px;
            width: 100%;
            cursor: pointer;
            transition: 0.3s;
        }

        .booking-form button:hover {
            background: #0056b3;
        }
       

        .booking-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 450px;
            text-align: center;
        }

        h2 {
            margin-bottom: 15px;
            font-size: 24px;
            color: #333;
        }

        .form-group {
            margin-bottom: 12px;
            text-align: left;
        }

        label {
            font-size: 14px;
            font-weight: bold;
            color: #555;
            display: block;
            margin-bottom: 5px;
        }

        input, select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 8px;
            outline: none;
            transition: 0.3s;
        }

        input:focus, select:focus {
            border-color: #007BFF;
            box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.5);
        }

      
        .back-button {
            position: fixed;
            bottom: 10px;
            left: 10px;
            padding: 8px 16px;
            background-color: #ff6600;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .back-button:hover {
            background-color: #cc5200;
        }
    </style>
</head>
<body>
<a href="javascript:history.back()" class="back-button">Back</a>
    <h1>Booking Availability</h1>

    <div class="month-navigation">
        <?php
        $prevMonth = ($month == 1) ? 12 : $month - 1;
        $prevYear  = ($month == 1) ? $year - 1 : $year;
        $nextMonth = ($month == 12) ? 1 : $month + 1;
        $nextYear  = ($month == 12) ? $year + 1 : $year;
        ?>
        <a href="availability.php?month=<?php echo $prevMonth; ?>&year=<?php echo $prevYear; ?>">← Previous</a>
        <span><?php echo $monthNames[$month] . ' ' . $year; ?></span>
        <a href="availability.php?month=<?php echo $nextMonth; ?>&year=<?php echo $nextYear; ?>">Next →</a>
    </div>

    <table class="calendar">
        <thead>
            <tr>
                <?php foreach ($dayNames as $dayName) { ?>
                    <th><?php echo $dayName; ?></th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $dayCount = 1;
            echo "<tr>";
            for ($i = 0; $i < $firstDayOfMonth; $i++) {
                echo "<td></td>";
            }

            while ($dayCount <= $daysInMonth) {
                $currentDate = date('Y-m-d', strtotime($year . '-' . $month . '-' . $dayCount));
                $isBooked = isDateBooked($conn, $currentDate, $currentDate);

                if ($isBooked) {
                    echo "<td class='day booked'>" . $dayCount . "</td>";
                } else {
                    echo "<td class='day available' data-date='" . $currentDate . "'>" . $dayCount . "</td>";
                }

                $dayCount++;
                if (($firstDayOfMonth + $dayCount - 2) % 7 == 6) {
                    echo "</tr><tr>";
                }
            }

            echo "</tr>";
            ?>
        </tbody>
    </table>
    

    <div class="booking-form">
        <h2>Book This Date</h2>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) . '?month=' . $month . '&year=' . $year; ?>" method="post">
            <label for="booking_date">Booking Date:</label>
            <input type="date" id="booking_date" name="booking_date" required>

            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mobile_no">Mobile No:</label>
            <input type="text" id="mobile_no" name="mobile_no" required>

            <label for="start_date">Start Date:</label>
            <input type="datetime-local" id="start_date" name="start_date" required>

            <label for="end_date">End Date:</label>
            <input type="datetime-local" id="end_date" name="end_date" required>
            <label for="event_type">Event Type:</label>  
            <select id="event_type" name="event_type" required>  
                <option value="">Select Event Type</option>  
                <option value="Wedding">Wedding</option>  
                <option value="Birthday">Birthday</option>  
                <option value="Party">Party</option>  
                <option value="Engagement">Engagement</option>  
                <option value="College Party">College Party</option>  
                <option value="Other">Other</option>  
            </select>
            <?php
                // Get the price from the URL parameter
                $price = isset($_GET['price']) ? htmlspecialchars($_GET['price']) : '';
            ?>

<label for="price">Price</label>
<input type="text" id="price" name="price" required value="<?php echo $price; ?>">

            <button type="submit">Book Now</button>
            <?php if (!empty($booking_error)) : ?>
    <div class="error-message"><?php echo $booking_error; ?></div>
<?php endif; ?>

<?php if (!empty($booking_success)) : ?>
    <div class="success-message"><?php echo $booking_success; ?></div>
<?php endif; ?>

        </form>
    </div>

    <script>
        const days = document.querySelectorAll('.calendar .day.available');
        const bookingDate = document.getElementById('booking_date');

        days.forEach(day => {
            day.addEventListener('click', () => {
                bookingDate.value = day.getAttribute('data-date');
            });
        });
    </script>

</body>
</html>


<?php $conn->close(); ?>
