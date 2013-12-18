<?php
$urltoRichmond = "http://countdown.tfl.gov.uk/stopBoard/51750";
$urltoKingston  = "http://countdown.tfl.gov.uk/stopBoard/*****"

$url ="http://countdown.tfl.gov.uk/stopBoard/51750";
$result= file_get_contents($url);
$parts = explode(",",$result);

// echo $result;
//print_r ($parts);

print ("the next bus is to richmond ");
echo $parts[5];
?>
