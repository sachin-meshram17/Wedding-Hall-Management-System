<!DOCTYPE html>
<html>
<head>
    <title>Booking Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: rgb(89, 238, 226);
            background-image: url('gallery/W-background.jpg');
            background-size: cover; /* Cover the entire background */  
            background-position: center; /* Center the background image */
        }

        .logout-button {
            background: red;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        
        .report-button, .booking-details-button {
            padding: 20px 60px;
            font-size: 2em;
            background-color: #FF6600;
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            text-decoration: none;
            display: inline-block;
            margin: 10px; /* Add margin for spacing */
        }

        .report-button:hover, .booking-details-button:hover, .logout-button:hover {
            background-color: #E55B00;
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }

        .button-container {
            text-align: center;
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

        .logout-button {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #e7f6f2;
            padding: 20px;
        }
        h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background: white;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #ff6600;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .back-button {
            margin-top: 20px;
            display: inline-block;
            background-color: #ff6600;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .back-button:hover {
            background-color: #cc5200;
        }
    </style>
</head>
<body>
<a href="javascript:history.back()" class="back-button">Back</a>
    
    <div class="button-container">
        <a href="report.php" class="report-button">View Report</a>
        <a href="booking_details.php" class="booking-details-button">Booking Details</a> <!-- New Button -->
    </div>

    <a href="login.php" class="logout-button">Logout</a> <!-- Logout Button -->

    <a href="dashboard_admin.php" class="back-button">Back to Dashboard</a>
</body>
</html>