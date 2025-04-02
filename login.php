<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Check if email exists
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashedPassword,);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashedPassword)) {
            session_start();
            $_SESSION['user_id'] = $id;
            $_SESSION['user_password'] = $password;

            // Redirect based on role
            if ($password === 'admin') {
                echo "<script>alert('Login successful! Redirecting to admin dashboard...'); window.location.href='admin_dashboard.php';</script>";
            } else {
                echo "<script>alert('Login successful! Redirecting to home...'); window.location.href='home.php';</script>";
            }
        } else {
            echo "<script>alert('Invalid password!'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('No account found! Please sign up.'); window.location.href='signup.php';</script>";
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body { background:rgb(255, 255, 255); font-family: Lato, sans-serif; color:rgb(123, 111, 111); text-align: center; }
        .container { width: 400px; margin: 50px auto; padding: 30px; background: #E3E3E3; border-radius: 10px; }
        input { width: 90%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; }
        .login-btn { background: #405296; color: white; font-size: 18px; padding: 10px; width: 100%; border: none; border-radius: 5px; cursor: pointer; }
        .signup-link { margin-top: 20px; display: block; color: #839CF6; text-decoration: none; }
    </style>
</head>
<body>
    <h1>Burgundy Inn</h1>

    <div class="container">

        <h1>Login</h1>
        <form method="POST">
            <input type="email" name="email" placeholder="E-mail" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <a href="signup.php" class="signup-link">Don’t have an account? Sign up here</a>
    </div>

</body>
</html>
