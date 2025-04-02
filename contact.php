<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Burgundy Inn</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            background: rgb(51, 109, 130);
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
        .container {
            width: 100%;
            max-width: 1440px;
            margin: auto;
            text-align: center;
            padding-top: 50px;
        }
        .Contact {
            background: rgb(51, 109, 130);
            padding: 20px;
          
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
       

        .content {
            background: white;
            padding: 40px;
            margin: 50px auto;
            width: 80%;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
        }
        input, textarea {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 2px solid black;
            font-size: 18px;
        }
        button {
            background: #6776D6;
            color: white;
            border: none;
            padding: 15px 20px;
            font-size: 18px;
            cursor: pointer;
            margin-top: 20px;
            border-radius: 5px;
        }
        button:hover {
            background: #4A4D65;
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
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
        <div class="Contact">
            <h1>Contact Us</h1>
            <p>We can't solve your problem if you don't tell us about it.</p>
        </div>
        <div class="content">
        <form action="contact_submit.php" method="POST">
          <input type="text" name="name" placeholder="Enter Name" required><br>
          <input type="email" name="email" placeholder="Enter Email" required><br>
          <input type="tel" name="phone" placeholder="Enter Phone Number" required><br>
         <textarea name="message" rows="5" placeholder="Message here" required></textarea><br>
        <button type="submit">Submit</button>
  </form>
            <br>
            <button onclick="window.location.href='Home.php'">Back to Home</button>
        </div>
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
