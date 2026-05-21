<?php
// domainB.com: show cookies received by domainB
header('Content-Type: text/plain; charset=UTF-8');

echo "Domain: domainB.com\n";

echo "\nCookies received by domainB:\n";
if (empty($_COOKIE)) {
    echo "(none)\n";
} else {
    foreach ($_COOKIE as $name => $value) {
        echo $name . ' = ' . $value . "\n";
    }
}

echo "\nExpected: cookie from domainA is NOT present here.\n";
