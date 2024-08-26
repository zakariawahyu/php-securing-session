<?php
session_start();

// Mengatur session cookie agar bertahan selama satu jam (3600 detik)
// jika 0, session cookie akan aktif sampai browser ditutup
ini_set('session.cookie_lifetime', 3600);

// Cek session
if (isset($_SESSION['username'])) {
    // Get data session
    $username = $_SESSION['username'];

    // Simpel authentication
    if ($username == 'zakaria') {
        echo "Hello ".$username.", selamat datang di aplikasi cookie-lifetime";
        echo "<br>";
        echo "Logout klik link berikut. <a href='/cookie-lifetime/logout.php'>Logout</a>";
    } else {
        echo "Not authenticated";
    }
} else {
    echo "Anda dilarang masuk, silahkan klik di link berikut. <a href='/cookie-lifetime/login.php'>Login</a>";
}

?>