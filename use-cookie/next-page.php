<?php
// Cek di url terdapat params atau tidak
if (isset($_GET['PHPSESSID'])) {
    // Get session by id
    session_id($_GET['PHPSESSID']);
} else {
    return print_r("Error, please insert the correct params");
}

// Mulai session
session_start();

// Print data session
echo json_encode($_SESSION);
?>