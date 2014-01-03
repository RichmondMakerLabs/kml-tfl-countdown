<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 <title>Buses from Kingston MakerLabs</title>
<meta http-equiv="refresh" content="16">
<meta name="viewport" content="width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes" />
<style type="text/css" media="screen">
   body {
     background-color:#000;
     color:#FFA500;
     font-family: Tahoma, Geneva, sans-serif;
     font-size:1.2em;
   }
  </style>
</head>
<body>
<!-- insert comment here -->
<!-- there is some php code here that can be found in
 https://github.com/KingstonMakerLabs/kml-tfl-countdown
please contribuite! This software is released under AGPL 3 or later
see https://www.gnu.org/licenses/agpl-3.0.html for more details.
-->
<header>
<h4>Buses from Kingston MakerLabs</h4>
</header>
<?php
$heading = "Ashburnham Road to Richmond";
$stopnumber = 51750;
display ($heading,$stopnumber);

$heading = "Ashburnham Road to Kingston";
$stopnumber = 56822;
display ($heading,$stopnumber);

$heading = "Mariner Gardens to Richmond";
$stopnumber = 57780;
display ($heading,$stopnumber);

$heading = "Mariner Gardens to Kingston";
$stopnumber = 57522;
display ($heading,$stopnumber);


function display ($head,$num)
{
	$url = "http://countdown.tfl.gov.uk/stopBoard/$num";
   $result= file_get_contents($url);
   $info =  (json_decode($result,true));
   $line = 0;
   
	echo("
		<section>
		<h5>$head<h5>
		<pre>
	");
   foreach ($info['arrivals'] as $bus ) {
  		++$line;
  		printf("%-2d %-4s %-16s%2d min\n",$line,$bus['routeName'],$bus['destination'],$bus['estimatedWait']);
   }
   echo("
   	</pre>
   	</section>
   ");
}
?>
</body>
</html>
