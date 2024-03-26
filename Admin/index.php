<?php
session_start();

// Function to check if user is already logged in
function isLoggedIn() {
    return isset($_SESSION['username']);
}

// Function to validate username, email, and password
function validateCredentials($username, $email, $password) {
    // You can implement your own validation logic here
    // For simplicity, let's just check if username, email, and password are not empty
    if (!empty($username) && !empty($email) && !empty($password)) {
        return true;
    }
    return false;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate credentials
    if (validateCredentials($username, $email, $password)) {
        // Set session variables
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

        // Redirect to home page or any other page after successful login
        header("Location: home.php");
        exit;
    } else {
        // Display error message for failed authentication
        echo "<script>alert('Invalid username, email, or password. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="./css/preloader.css">
</head>
<body>
<!-- Preloader HTML -->
<div id="preloader">
    <div class="spinner"></div>
</div>
<!-- Your main content -->
<h1>Welcome to UmucyoChoir</h1>
<!-- JavaScript to hide the preloader after a specified time -->
<h2>Login</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" required><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" required><br><br>
    <input type="submit" value="Login">
</form>
<script src="./js/preloader.js"></script>
</body>
</html>
