<?php
// Mulai sesi
session_start();

// Regenereate session id
session_regenerate_id(true);

// Hancurkan sesi
session_destroy();

// Redirect ke halaman index
header("Location: /cookie-lifetime");
exit();
?>