<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Burgundy Inn</title>
    <script src="https://kit.fontawesome.com/YOUR-KIT-ID.js" crossorigin="anonymous"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background: linear-gradient(180deg, white 59%, #C4D2FD 100%);
            overflow-x: hidden;
        }
        .header {
            width: 100%;
            height: 100px;
            background: white;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 50px;
        }
        .logo img {
            width: 150px;
            height: auto;
        }
        .nav {
            display: flex;
            gap: 50px;
        }
        .nav a {
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            color: black;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            transition: color 0.3s ease-in-out;
        }
        .nav a:hover {
            color: #8C9A94;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }
        h1 {
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .footer {
            width: 100%;
            background: #333;
            color: white;
            text-align: center;
            padding: 30px 0;
            margin-top: 40px;
        }
        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
            font-size: 24px;
            color: white;
            transition: color 0.3s ease-in-out;
        }
        .social-icons a:hover {
            color: #0077cc;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="logo">
        <img src="logo.png" alt="Burgundy Inn Logo">
    </div>
    <div class="nav">
        <a href="Home.php">Home</a>
        <a href="reservation.php">Reservation</a>
        <a href="about_us.php">About us</a>
        <a href="contact.php">Contact us</a>
        <a href="login.php">Logout</a>
    </div>
</div>

<div class="container">
    <h1>About Us</h1>
    <p>Welcome to Burgundy Inn, where luxury meets comfort. Nestled in the heart of the city, our inn offers a serene escape from the bustling world while providing top-notch amenities and personalized service.</p>
    <p>Our mission is to provide our guests with an unforgettable stay, ensuring that each visit is met with warmth, elegance, and exceptional hospitality. Whether you're here for business or leisure, Burgundy Inn is your home away from home.</p>
    <p>Thank you for choosing Burgundy Inn. We look forward to serving you!</p>
</div>

<div class="footer">
        <p>Burgundy Inn</p>
        <p>&copy; 2025 OurWebsite.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-google"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
</body>
</html>
