<!DOCTYPE html>  
<html lang="en">  
<head>  
    <meta charset="UTF-8">  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Location</title>  
    <link rel="stylesheet" href="style.css"> <!-- Ensure the same styles are applied -->  
    <style>  
        body {  
            margin: 0;  
            font-family: Arial, sans-serif;  
            background-image: url('dash background img.jpg'); /* Same background image */  
            background-size: cover;  
            background-position: center;  
            color: white;  
        }  
        .content {  
            padding: 20px;  
            max-width: 800px;  
            margin: 0 auto; /* Center content */  
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background for readability */  
            border-radius: 8px;  
        }  
        #map {  
            width: 100%;  
            height: 400px; /* Set map height */  
            border-radius: 8px;  
        }  
        .back-button {
            position: fixed;
            top: 10px;
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
            <li><a href="home.php">Home</a></li>  
            <li><a href="about.php">About us</a></li>  
            <li><a href="contact.php">Contact</a></li>  
            <li><a href="location.php">Location</a></li> <!-- Same link for consistency -->  
        </ul>  
    </div>  

    <div class="content">  
        <h1>Our Location</h1>  
        <div id="map"></div> <!-- Div for Google map -->  
        <p>Please reach out if you need help finding us!</p>  
    </div>  

    <script>  
        // Initialize the Google Map  
        function initMap() {  
            // Replace with your actual latitude and longitude  
            const location = { lat: 37.7749, lng: -122.4194 }; // Example: San Francisco coordinates  
            const map = new google.maps.Map(document.getElementById("map"), {  
                zoom: 12,  
                center: location,  
            });  
            const marker = new google.maps.Marker({  
                position: location,  
                map: map,  
            });  
        }  
    </script>  
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>  
</body>  
</html>