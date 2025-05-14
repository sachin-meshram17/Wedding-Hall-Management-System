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

// Fetch total bookings and total revenue
$sql = "SELECT COUNT(*) AS total_bookings, SUM(price) AS total_revenue FROM bookings";
$result = $conn->query($sql);

$totalBookings = 0;
$totalRevenue = 0;
if ($result && $row = $result->fetch_assoc()) {
    $totalBookings = $row['total_bookings'];
    $totalRevenue = $row['total_revenue'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Reports</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color:rgb(89, 238, 226);
            padding: 100px;
        }
        .report-container {
            background-color: #fff;
            padding: 80px;
            margin: auto;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .report-box {
            background-color:rgb(233, 102, 26);
            color: #fff;
            padding: 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            margin: 10px 0;
            width: 100%;
        }
        .report-box:hover {
            background-color:rgb(27, 245, 34);
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

    <div class="report-container">
        <h2>View Reports</h2>
        <div class="report-box">
            <span>Total Bookings: <?php echo $totalBookings; ?></span>
        </div>
        <div class="report-box">
            <span>Total Revenue: Rs.<?php echo number_format($totalRevenue, 2); ?></span>
        </div>
    </div>
</body>
</html>

<?php $conn->close(); ?>