<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Buses from Kingston Makerlabs</title>
    <link rel="icon" type="image/png" href="http://www.kml.dreamhosters.com/bus/Bus_stop_ico.png">
    <link rel="apple-touch-icon" href="http://www.kml.dreamhosters.com/bus/Bus_stop.png"/>
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
<section>
<h5>Ashburnham Road to Richmond</h5>
<?php
$urltoAlpha = "http://countdown.tfl.gov.uk/stopBoard/51750";
echo("<pre>");
foreach (array($urltoAlpha) as $url) {

  $result= file_get_contents($url);
  $info =  (json_decode($result,true));
	//print("\nLast updated " . $info['lastUpdated'] . "\n");
  $line = 0;
  foreach ($info['arrivals'] as $bus ) {
  		++$line;
  		printf("%-2d %-4s %-16s%2d min\n",$line,$bus['routeName'],$bus['destination'],$bus['estimatedWait']);
  }
}
echo("</pre>");
?>
</section>
<section>
<h5>Ashburnham Road to Kingston</h5>
<?php
$urltoBravo  = "http://countdown.tfl.gov.uk/stopBoard/56822";
echo("<pre>");
foreach (array($urltoBravo) as $url) {

  $result= file_get_contents($url);
  $info =  (json_decode($result,true));
	//print("\nLast updated " . $info['lastUpdated'] . "\n");
  $line = 0;
  foreach ($info['arrivals'] as $bus ) {
  		++$line;
  		printf("%-2d %-4s %-16s%2d min\n",$line,$bus['routeName'],$bus['destination'],$bus['estimatedWait']);
  }
}
echo("</pre>");
?>
</section>
<section>
<h5>Mariner Gardens to Richmond</h5>
<?php
$urltoCharlie = "http://countdown.tfl.gov.uk/stopBoard/57780";
echo("<pre>");
foreach (array($urltoCharlie) as $url) {

  $result= file_get_contents($url);
  $info =  (json_decode($result,true));
	//print("\nLast updated " . $info['lastUpdated'] . "\nFrom Mariner Gardens\n" );
  $line = 0;
  foreach ($info['arrivals'] as $bus ) {
  		++$line;
  		printf("%-2d %-4s %-16s%2d min\n",$line,$bus['routeName'],$bus['destination'],$bus['estimatedWait']);
  }
}
echo("</pre>");
?>
</section>
<section>
<h5>Mariner Gardens to Kingston</h5>
<?php
$urltoDelta  = "http://countdown.tfl.gov.uk/stopBoard/57522";
echo("<pre>");
foreach (array($urltoDelta) as $url) {

  $result= file_get_contents($url);
  $info =  (json_decode($result,true));
	//print("\nLast updated " . $info['lastUpdated'] . "\nFrom Mariner Gardens\n" );
  $line = 0;
  foreach ($info['arrivals'] as $bus ) {
  		++$line;
  		printf("%-2d %-4s %-16s%2d min\n",$line,$bus['routeName'],$bus['destination'],$bus['estimatedWait']);
  }
}
echo("</pre>");
?>
</section>
</body>
</html>
