<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parties</title>
    <style>
        body {
             font-family: Arial, sans-serif;
            background: url('gallery/P-background.jpg') no-repeat center center fixed;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            color: dark;
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
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-bottom: 30px;
        }

        .gallery-item {
            text-align: center;
        }

        .gallery img {
            width: 300px;
            height: 200px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
            cursor: pointer;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        .price {
            margin-top: 8px;
            font-size: 18px;
            font-weight: bold;
            color: #ff6600;
            cursor: pointer;
        }

        .book-now {
            background-color: #ff6600;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .book-now:hover {
            background-color: #cc5200;
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
    <h1>Welcome to Our Party Hall</h1>
    <p>Celebrate your special moments with us!</p>

    <div class="gallery">
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/p1.png" alt="Party Hall 1">
            <p class="price">Price: 6000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7500)">
            <img src="gallery/p2.jpg" alt="Party Hall 2">
            <p class="price">Price: 7500</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(9000)">
            <img src="gallery/p3.jpeg" alt="Party Hall 3">
            <p class="price">Price: 20000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(8500)">
            <img src="gallery/p4.jpg" alt="Party Hall 4">
            <p class="price">Price: 18000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/p5.jpeg" alt="Party Hall 1">
            <p class="price">Price: 21000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7500)">
            <img src="gallery/p6.jpg" alt="Party Hall 2">
            <p class="price">Price: 17500</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(9000)">
            <img src="gallery/p7.jpg" alt="Party Hall 3">
            <p class="price">Price: 9000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(8500)">
            <img src="gallery/p8.jpg" alt="Party Hall 4">
            <p class="price">Price: 8500</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/p9.jpg" alt="Party Hall 1">
            <p class="price">Price: 6000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7500)">
            <img src="gallery/p10.jpg" alt="Party Hall 2">
            <p class="price">Price: 7500</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(9000)">
            <img src="gallery/p11.jpg" alt="Party Hall 3">
            <p class="price">Price: 19000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(8500)">
            <img src="gallery/p12.jpg" alt="Party Hall 4">
            <p class="price">Price: 18500</p>
        </div><div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/p13.jpg" alt="Party Hall 1">
            <p class="price">Price: 26000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7500)">
            <img src="gallery/p14.jpg" alt="Party Hall 2">
            <p class="price">Price: 20000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(9000)">
            <img src="gallery/p15.jpeg" alt="Party Hall 3">
            <p class="price">Price: 11000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(8500)">
            <img src="gallery/p16.jpg" alt="Party Hall 4">
            <p class="price">Price: 10500</p>
        </div><div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/p17.jpeg" alt="Party Hall 1">
            <p class="price">Price: 16000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7500)">
            <img src="gallery/p18.webp" alt="Party Hall 2">
            <p class="price">Price: 17500</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(9000)">
            <img src="gallery/p19.jpg" alt="Party Hall 3">
            <p class="price">Price: 19000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(8500)">
            <img src="gallery/p20.jpg" alt="Party Hall 4">
            <p class="price">Price: 18500</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(8500)">
            <img src="gallery/p21.jpg" alt="Party Hall 4">
            <p class="price">Price: 18500</p>
        </div>
    </div>

    <script>
        function redirectToAvailability(price) {
            // Redirect to the availability page with the price as a query parameter
            window.location.href = `availability.php?price=${price}`;
        }
    </script>
</body>

</html>
