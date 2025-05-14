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

// Fetch all bookings
$sql = "SELECT * FROM bookings";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #FF6600;
            color: white;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .back-button {
            padding: 8px 16px;
            background-color: #ff6600;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
            display: inline-block;
            margin: 20px 0;
        }
        .back-button:hover {
            background-color: #cc5200;
        }
    </style>
</head>
<body>
    <h2>Booking Details</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Event Type</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['fullname']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['mobile_no']}</td>
                            <td>{$row['start_date']}</td>
                            <td>{$row['end_date']}</td>
                            <td>{$row['event_type']}</td>
                            <td>Rs. " . (empty($row['price']) ? '0.00' : number_format($row['price'], 2)) . "</td>
                          </tr>";
                }
            } else {
                echo "<tr><td colspan='8'>No bookings found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <a href="dashboard_admin.php" class="back-button">Back to Dashboard</a>
</body>
</html>

<?php $conn->close(); ?>