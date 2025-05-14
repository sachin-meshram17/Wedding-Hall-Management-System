<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wedding_hall_management";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$cancel_error = "";
$cancel_success = "";

// Handle cancellation
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $booking_id = isset($_POST['booking_id']) ? $_POST['booking_id'] : '';
    $booking_id = htmlspecialchars($booking_id);

    if (empty($booking_id)) {
        $cancel_error = "Please enter a valid Booking ID.";
    } else {
        $sql = "DELETE FROM bookings WHERE id = ?";
        $stmt = $conn->prepare($sql);
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }
        $stmt->bind_param("i", $booking_id);
        if ($stmt->execute()) {
            if ($stmt->affected_rows > 0) {
                $cancel_success = "Booking cancelled successfully.";
            } else {
                $cancel_error = "Booking ID not found.";
            }
        } else {
            $cancel_error = "Error cancelling booking: " . $stmt->error;
        }
        $stmt->close();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cancel Booking</title>
    <style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color:rgb(246, 250, 193);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
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
    <h2>Cancel Booking</h2>
    <?php if (!empty($cancel_success)) echo "<p style='color: green;'>$cancel_success</p>"; ?>
    <?php if (!empty($cancel_error)) echo "<p style='color: red;'>$cancel_error</p>"; ?>
    <form method="POST">
        <label for="booking_id">Booking ID:</label>
        <input type="text" name="booking_id" id="booking_id" required>
        <button type="submit">Cancel Booking</button>
    </form>
</body>
</html>
