<?php
// Penyerang mmebuat session ID yang telah di tentukan ditentukan
$fixed_session_id = 'aafssdrewdES123456';

// Membuat session id
session_id($fixed_session_id);

session_start();
$_SESSION['username'] = "Zakaria";
$_SESSION['user_id'] = 'HH123';

echo "Configuration sessin cookie". json_encode(session_get_cookie_params());
?>