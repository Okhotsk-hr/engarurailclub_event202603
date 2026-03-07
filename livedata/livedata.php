<?php
include('url.php');
$response = file_get_contents($url);

list($num1, $num2, $date) = explode(",", $response);

echo "内回り" . $num1 . "\n" . "外回り" . $num2 . "\n日時" . substr($date, 16, 8) . "\n";
