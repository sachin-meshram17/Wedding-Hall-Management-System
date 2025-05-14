<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Birthday Hall</title>
    <style>
         body {
             font-family: Arial, sans-serif;
            background: url('gallery/B-background.jpg') no-repeat center center fixed;
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
        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }
        .gallery-item {
            text-align: center;
            cursor: pointer;
        }
        .gallery img {
            width: 300px;
            height: 200px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
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
            margin-top: 30px;
            padding: 12px 25px;
            font-size: 18px;
            color: white;
            background-color: #ff6600;
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
    <h1>Welcome to the Birthday Hall</h1>
    <p>Check out our stunning wedding hall setup for birthdays!</p>
    
    <div class="gallery">
        <div class="gallery-item" onclick="redirectToAvailability(5000)">
            <img src="gallery/birth4.jpg" alt="Birthday Hall 1">
            <p class="price">Price: 5000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7000)">
            <img src="gallery/birth1.jpg" alt="Birthday Hall 2">
            <p class="price">Price: 7000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/birth3.jpg" alt="Birthday Hall 3">
            <p class="price">Price: 6000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(5000)">
            <img src="gallery/birth4.jpg" alt="Birthday Hall 1">
            <p class="price">Price: 5000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7000)">
            <img src="gallery/b1.jpg" alt="Birthday Hall 2">
            <p class="price">Price: 10000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/b2.jpg" alt="Birthday Hall 3">
            <p class="price">Price: 16000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(5000)">
            <img src="gallery/b3.jpg" alt="Birthday Hall 1">
            <p class="price">Price: 15000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7000)">
            <img src="gallery/b4.jpg" alt="Birthday Hall 2">
            <p class="price">Price: 7000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/b5.jpg" alt="Birthday Hall 3">
            <p class="price">Price: 6000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(5000)">
            <img src="gallery/b6.jpg" alt="Birthday Hall 1">
            <p class="price">Price: 15000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7000)">
            <img src="gallery/b7.jpg" alt="Birthday Hall 2">
            <p class="price">Price: 17000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/b8.jpg" alt="Birthday Hall 3">
            <p class="price">Price: 16000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(5000)">
            <img src="gallery/b9.jpg" alt="Birthday Hall 1">
            <p class="price">Price: 35000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7000)">
            <img src="gallery/b10.jpg" alt="Birthday Hall 2">
            <p class="price">Price: 10000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/b11.jpg" alt="Birthday Hall 3">
            <p class="price">Price: 6000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(5000)">
            <img src="gallery/b12.jpg" alt="Birthday Hall 1">
            <p class="price">Price: 5000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7000)">
            <img src="gallery/b13.jpg" alt="Birthday Hall 2">
            <p class="price">Price: 7000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/b14.jpg" alt="Birthday Hall 3">
            <p class="price">Price: 6000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(5000)">
            <img src="gallery/b1.jpg" alt="Birthday Hall 1">
            <p class="price">Price: 15000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7000)">
            <img src="gallery/b15.jpg" alt="Birthday Hall 2">
            <p class="price">Price: 27000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/b16.jpg" alt="Birthday Hall 3">
            <p class="price">Price:25000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(5000)">
            <img src="gallery/b17.jpg" alt="Birthday Hall 1">
            <p class="price">Price: 15000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(7000)">
            <img src="gallery/b18.jpg" alt="Birthday Hall 2">
            <p class="price">Price: 17000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/b1.jpg" alt="Birthday Hall 3">
            <p class="price">Price: 16000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/b2.jpg" alt="Birthday Hall 3">
            <p class="price">Price: 16000</p>
        </div>
        <div class="gallery-item" onclick="redirectToAvailability(6000)">
            <img src="gallery/b5.jpg" alt="Birthday Hall 3">
            <p class="price">Price: 20000</p>
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
