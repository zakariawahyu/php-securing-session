<?php
// Mulai session
session_start();

// Simpan data dalam session
$_SESSION['username'] = 'Zakaria';

// Link dengan session ID di URL
echo '<a href="next-page.php?' . SID . '">Go to next page</a>';
?>`