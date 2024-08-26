<?php
session_start();

// Valid data login
$valid_username = 'zakaria';
$valid_password = '1213';

// Get data from post params
$username = $_POST['username'];
$password = $_POST['password'];

// Validate data
if ($valid_username == $username && $valid_password == $password) {
    // jika login berhasil, save username ke session
    $_SESSION['username'] = $valid_username;

    // Redirect ke index
    header("Location: /cookie-lifetime");
    exit();
} else {
    echo "Username atau password salah!";
    echo "<br><a href='/cookie-lifetime/login.php'>Kembali ke Login</a>";
}
?>