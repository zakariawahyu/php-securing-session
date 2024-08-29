<?php
// Periksa apakah `session ID` dikirim melalui query string
if (isset($_GET['PHPSESSID'])) {
    // Tetapkan session ID dari klien
    session_id($_GET['PHPSESSID']);
}

// Memulai sesi dengan session ID yang ditetapkan dari klien
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    // Jika tidak, anggap pengguna login dengan mengatur user_id
    $_SESSION['user_id'] = 'zakaria';

    echo "User logged in with session ID: " . session_id() . " ". $_SESSION['user_id'];
} else {
    echo "Welcome back, ".$_SESSION['user_id'].". Your session ID is: " . session_id();
}

