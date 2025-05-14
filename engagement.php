<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engagement Page</title>
    <style>
       body {
             font-family: Arial, sans-serif;
            background: url('gallery/E-background.jpg') no-repeat center center fixed;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            width: 100vw;
            height: 100vh;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            color: dark;
        }

        .container {
            width: 60%;
            margin: 20px auto;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            box-shadow: 0px 0px 15px gray;
            border-radius: 10px;
            text-align: center;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .gallery-item {
            text-align: center;
        }

        .gallery img {
            width: 300px;
            height: 200px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
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
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            background-color: #ff6600;
            color: white;
            text-decoration: none;
            border-radius: 5px;
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
    <div class="container">
        <h1>Engagement Hall Gallery</h1>
        <div class="gallery">
            <div class="gallery-item" onclick="redirectToAvailability(8000)">
                <img src="gallery/e1.jpg" alt="Engagement Hall 1">
                <p class="price">Price: 8000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(9500)">
                <img src="gallery/e2.jpg" alt="Engagement Hall 2">
                <p class="price">Price: 9500</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(11000)">
                <img src="gallery/e3.jpg" alt="Engagement Hall 3">
                <p class="price">Price: 25000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(8000)">
                <img src="gallery/e11.jpg" alt="Engagement Hall 1">
                <p class="price">Price: 28000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(9500)">
                <img src="gallery/e12.jpg" alt="Engagement Hall 2">
                <p class="price">Price:13500</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(11000)">
                <img src="gallery/e13.jpg" alt="Engagement Hall 3">
                <p class="price">Price: 14000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(8000)">
                <img src="gallery/e14.jpg" alt="Engagement Hall 1">
                <p class="price">Price: 18000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(9500)">
                <img src="gallery/e15.jpg" alt="Engagement Hall 2">
                <p class="price">Price: 9500</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(11000)">
                <img src="gallery/e16.jpg" alt="Engagement Hall 3">
                <p class="price">Price: 11000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(8000)">
                <img src="gallery/e17.jpg" alt="Engagement Hall 1">
                <p class="price">Price: 8000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(9500)">
                <img src="gallery/e18.jpg" alt="Engagement Hall 2">
                <p class="price">Price: 9500</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(11000)">
                <img src="gallery/e19.jpg" alt="Engagement Hall 3">
                <p class="price">Price: 16000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(8000)">
                <img src="gallery/e20.jpg" alt="Engagement Hall 1">
                <p class="price">Price: 20000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(9500)">
                <img src="gallery/e21.jpg" alt="Engagement Hall 2">
                <p class="price">Price: 22000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(11000)">
                <img src="gallery/e22.jpg" alt="Engagement Hall 3">
                <p class="price">Price: 10000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(8000)">
                <img src="gallery/e23.jpg" alt="Engagement Hall 1">
                <p class="price">Price:15000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(9500)">
                <img src="gallery/e24.jpg" alt="Engagement Hall 2">
                <p class="price">Price: 19000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(11000)">
                <img src="gallery/e25.jpg" alt="Engagement Hall 3">
                <p class="price">Price: 10000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(8000)">
                <img src="gallery/e26.jpg" alt="Engagement Hall 1">
                <p class="price">Price: 18000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(9500)">
                <img src="gallery/e27.jpg" alt="Engagement Hall 2">
                <p class="price">Price: 9500</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(11000)">
                <img src="gallery/e28.jpg" alt="Engagement Hall 3">
                <p class="price">Price: 11000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(8000)">
                <img src="gallery/e29.jpg" alt="Engagement Hall 1">
                <p class="price">Price: 8000</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(9500)">
                <img src="gallery/e30.jpg" alt="Engagement Hall 2">
                <p class="price">Price: 19500</p>
            </div>
            <div class="gallery-item" onclick="redirectToAvailability(11000)">
                <img src="gallery/e31.jpg" alt="Engagement Hall 3">
                <p class="price">Price: 11000</p>
            </div>
        </div>

        <script>
            function redirectToAvailability(price) {
                // Redirect to the availability page with the price as a query parameter
                window.location.href = `availability.php?price=${price}`;
            }
        </script>
    </div>
</body>

</html>
