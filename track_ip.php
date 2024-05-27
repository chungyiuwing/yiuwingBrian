<?php
// 獲取訪問者IP地址
$ip_address = $_SERVER['REMOTE_ADDR'];

// 紀錄IP地址到文件中
$file = 'ip_log.txt';
$time = date('Y-m-d H:i:s');
$entry = "$time - $ip_address\n";

file_put_contents($file, $entry, FILE_APPEND);

header('Content-Type: image/png');
echo file_get_contents('tracker.png');
?>
