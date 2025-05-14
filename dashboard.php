<?php  
session_start();  

// Check if the user is logged in  
if (!isset($_SESSION['username'])) {  
    //header("Location: login.php");  
    //exit();  
}  

// Retrieve the login success message  
$login_message = "";  
if (isset($_SESSION['login_message'])) {  
    $login_message = $_SESSION['login_message']; // Get the login message  
    unset($_SESSION['login_message']); // Unset the message after displaying  
}  
?>  

<style>  
/* Your existing style code here... */  
body {  
    margin: 0;  
    font-family: Arial, sans-serif;  
    background-image: url('gallery/couple112.jpeg.jpg'); /* Replace with your background image URL */  
    background-size: cover; /* Cover the entire background */  
    background-position: center; /* Center the background image */  
    color: white; /* Text color for visibility */  
}  

.navbar {  
    display: flex;  
    justify-content: space-between;  
    align-items: center;  
    background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */  
    padding: 10px 20px;  
}  

.navbar ul {  
    list-style: none;  
    padding: 0;  
    display: flex;  
    margin: 0;  
    flex-grow: 1; /* Allow the ul to grow and take remaining space */  
}  

.navbar li {  
    margin: 0 15px;  
}  

.navbar li a {  
    color: white;  
    text-decoration: none;  
}  

.search-container {  
    display: flex;  
    align-items: center; /* Align items in the search container */  
}  

.search-container input {  
    padding: 5px;  
    border: none;  
    border-radius: 5px;  
}  

.search-container button {  
    padding: 5px 10px;  
    border: none;  
    border-radius: 5px;  
    background-color: #ff6600; /* Button color */  
    color: white;  
    cursor: pointer;  
}  

.search-container button:hover {  
    background-color: #cc5200; /* Button hover color */  
}  

.location-icon {  
    color: white;
    margin-left: 15px; /* Space between search and icon */  
    cursor: pointer; /* Indicate it's clickable */  
    font-size: 24px; /* Adjust font size according to preference */  
}  

.logout-button {  
    margin-left: 15px; /* Space between location icon and button */  
    padding: 5px 10px;  
    background-color: red; /* Red color for the logout button */  
    color: white;  
    border: none;  
    border-radius: 5px;  
    cursor: pointer;  
}  

.logout-container {  
    display: flex;  
    align-items: center; /* Center items in the logout container */  
}  

.content {  
    padding: 20px; /* Additional padding for content */  
}  
</style>  

<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Dashboard</title>  
    <link rel="stylesheet" href="style.css"> <!-- Link to your CSS file -->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> <!-- Font Awesome CDN -->  
    <style>
        /* Basic Navbar Styles */
        .navbar {
            background-color: #333;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar ul li {
            position: relative;
            padding: 5px;
        }

        .navbar ul li a {
            color: white;
            text-decoration: none;
            padding: 10px;
            display: block;
        }

        .navbar ul li:hover {
            background: #444;
            border-radius: 5px;
        }

        /* Dropdown Menu */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: black;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
            border-radius: 5px;
            min-width: 150px;
        }

        .dropdown-menu a {
            color: black;
            padding: 8px 12px;
            display: block;
            text-decoration: none;
        }

        .dropdown-menu a:hover {
            background: lightgray;
        }

        /* Logout & Location */
        .logout-container {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logout-button {
            background: red;
            color: white;
            border: none;
            padding: 8px 12px;
            cursor: pointer;
            border-radius: 5px;
        }

        .logout-button:hover {
            background: darkred; 
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
    <div class="navbar">  
        <ul>  
        <li id="home-tab">
    <a href="#">Home <i class="fas fa-caret-down"></i></a>
    <div class="dropdown-menu">
        <a href="wedds.php">Wedding</a>
        <a href="birthday.php">Birthday</a>
        <a href="parties.php">Parties</a>
        <a href="engagement.php">Engagement</a>
    </div>
</li>
            <!-- <li><a href="availability.php">Booking</a></li> -->
            <li><a href="contact.php">Contact</a></li>  
            <li><a href="about.php">About us</a></li>  
            <li><a href="gallery.php">Gallery</a></li>  
            <li><a href="cancle_booking.php">Cancel Booking</a></li>  
            <li><a href="booking_details.php">Booking History</a></li> 

            <!-- <li class="search-container">  
                <form action="/search" method="GET">  
                    <input type="text" placeholder="Search..." name="search">  
                    <button type="submit">Search</button>  
                </form>  
            </li>   -->
        </ul>   
         
        <div class="logout-container">  
            <a href="location.php" class="location-icon">  
                <i class="fa-solid fa-location-dot"></i>  
            </a>  
            <form action="logout.php" method="POST">  
                <button type="submit" class="logout-button">Logout</button>  
            </form>  
        </div>  
    </div>  
    
    <div class="content">  <br><br><br><br><br><br><br><br><br><br><br><br>
        <h1>Wishing you a lifetime of love and happiness!<br> May your journey together be filled with joy,
            <br> laughter, and beautiful memories. <br>Congratulations on your special day!</h1>  
    </div>  

    <script>
        document.addEventListener("DOMContentLoaded", function() {
    const homeTab = document.getElementById("home-tab");
    const dropdownMenu = homeTab.querySelector(".dropdown-menu");

    homeTab.addEventListener("click", function(event) {
        if (!event.target.closest("a")) { 
            event.preventDefault(); // Only prevent default when clicking on "Home", not the links inside
        }
        dropdownMenu.style.display = dropdownMenu.style.display === "block" ? "none" : "block";
    });

    document.addEventListener("click", function(event) {
        if (!homeTab.contains(event.target)) {
            dropdownMenu.style.display = "none";
        }
    });
});
    </script>
</body>  
</html>
