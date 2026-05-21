<?php
setcookie('session_id', 'abc123', [
    'expires' => time() + 3600,
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Lax',
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie SameSite Lax</title>
</head>
<body>
    <p>
        Contoh: klik link berikut dari domainA.com ke domainB.com.
        Karena navigasi GET langsung, cookie SameSite=Lax akan ikut terkirim.
    </p>
    <a href="https://inib.test" target="_blank">
        Navigasi GET ke inib.test
    </a>
</body>
</html>