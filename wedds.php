<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Hall Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url('gallery/W-background.jpg') no-repeat center center fixed;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            text-align: center;
        }

        .container {
            width: 60%;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            box-shadow: 0px 0px 15px gray;
            border-radius: 10px;
        }

        .gallery {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .gallery-item {
            text-align: center;
        }

        .gallery img {
            width: 300px;
            height: 200px;
            border-radius: 8px;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
        }

        .gallery img:hover {
            transform: scale(1.1);
        }

        .price {
            margin-top: 8px;
            font-size: 18px;
            font-weight: bold;
            color: #ff5733;
            cursor: pointer;
        }

        .book-now {
            background: #ff5733;
            color: white;
            padding: 12px 24px;
            font-size: 18px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            transition: 0.3s;
            margin-top: 20px;
        }

        .book-now:hover {
            background: #e74c3c;
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
<div class="container">
    <h2>Welcome to Our Wedding Hall</h2>
    <p>Make your special moments unforgettable with our stunning wedding hall.</p>

    <div class="gallery">
        <div class="gallery-item" onclick="redirectToAvailability(1500)">
            <img src="gallery\wdd.jpg" alt="Wedding Hall 1">
            <p class="price">Price: 15000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(1800)">
            <img src="gallery\wd5.jpg" alt="Wedding Hall 2">
            <p class="price">Price: 18000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(2000)">
            <img src="gallery\wd3.jpg" alt="Wedding Hall 3">
            <p class="price">Price: 20000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(10000)">
            <img src="gallery\h16.jpg" alt="Wedding Hall 3">
            <p class="price">Price: 10000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(24000)">
            <img src="gallery\h4.jpg" alt="Wedding Hall 3">
            <p class="price">Price: 24000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(28000)">
            <img src="gallery\h5.jpg" alt="Wedding Hall 3">
            <p class="price">Price: 28000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(30000)">
            <img src="gallery\h6.jpg" alt="Wedding Hall 3">
            <p class="price">Price: 30000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(32000)">
            <img src="gallery\h7.jpg" alt="Wedding Hall 3">
            <p class="price">Price: 32000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(35000)">
            <img src="gallery\h8.jpg" alt="Wedding Hall 3">
            <p class="price">Price: 35000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(40000)">
            <img src="gallery\h9.jpg" alt="Wedding Hall 3">
            <p class="price">Price: 40000</p>
        </div>
    </div>
</div>

<script>
function redirectToAvailability(price) {
    // Redirect to the availability page with the price as a query parameter
    window.location.href = `availability.php?price=${price}`;
}
</script>


        <!-- <button class="book-now" onclick="location.href='availability.php'">Book Now</button> -->
    </div>
</body>
</html>
