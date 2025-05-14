<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Hall Gallery</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color:lightblue;
        }
        .gallery-container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 15px;
        }
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }
        .gallery-item:hover {
            transform: scale(1.05);
        }
        .gallery-item img {
            width: 100%;
            height: auto;
            display: block;
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
    <div class="gallery-container">
    <!-- <a href="gallery">&larr; Back to Gallery</a> -->
        <h1>Our Wedding Hall Gallery</h1>
        <div class="gallery">
            <div class="gallery-item"><img src="gallery/h22.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/h23.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/h24.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/h25.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/h26.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/h27.jpg" alt="Wedding Hall 6"></div>

            <div class="gallery-item"><img src="gallery/h1.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/h2.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/h3.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/h4.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/h5.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/h6.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/h7.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/h8.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/h9.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/10.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/h11.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/h12.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/h13.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/h19.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/h15.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/h16.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/h17.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/h18.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/h19.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/h20.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/h21.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/h28.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/h29.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/h30.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/h31.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/h32.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/h33.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/h34.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/h35.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/h27.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/h36.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/h37.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/h38.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/h39.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/h40.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/h27.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/h22.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/h23.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/h24.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/h25.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/h26.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/h27.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/h22.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/h23.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/h24.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/h25.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/h26.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/h27.jpg" alt="Wedding Hall 6"></div>

            <div class="gallery-item"><img src="gallery/b1.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/b2.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/b3.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/b4.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/b5.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/b6.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/b7.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/b8.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/b9.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/b10.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/b11.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/b12.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/b13.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/b14.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/b15.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/b16.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/b17.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/b18.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/b16.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/e1.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/e2.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/e3.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/e11.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/e12.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/e13.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/e14.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/e15.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/e16.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/e17.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/e18.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/e19.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/e20.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/e21.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/e22.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/e23.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/e24.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/e25.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/e26.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/e27.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/e28.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/e29.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/e30.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/e31.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/h23.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/h24.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/h25.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/h26.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/h27.jpg" alt="Wedding Hall 6"></div>

            <div class="gallery-item"><img src="gallery/p1.png" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/p2.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/p3.jpeg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/p4.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/p5.jpeg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/p6.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/p7.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/p8.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/p9.jpg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/p10.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/p11.jpg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/p12.jpg" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/p13.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/p14.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/p15.jpeg" alt="Wedding Hall 3"></div>
            <div class="gallery-item"><img src="gallery/p16.jpg" alt="Wedding Hall 4"></div>
            <div class="gallery-item"><img src="gallery/p17.jpeg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/p18.webp" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/p16.jpg" alt="Wedding Hall 1"></div>
            
            <div class="gallery-item"><img src="gallery/p17.jpeg" alt="Wedding Hall 5"></div>
            <div class="gallery-item"><img src="gallery/p18.webp" alt="Wedding Hall 6"></div>
            <div class="gallery-item"><img src="gallery/p19.jpg" alt="Wedding Hall 1"></div>
            <div class="gallery-item"><img src="gallery/p20.jpg" alt="Wedding Hall 2"></div>
            <div class="gallery-item"><img src="gallery/p21.jpg" alt="Wedding Hall 3"></div>
        </div>


    </div>
</body>
</html>
