<!DOCTYPE html>
<html lang="en">
<head>
<title>KML countdown</title>
<meta http-equiv="refresh" content="32">
<meta name="viewport" content="width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes" />
<style type="text/css" media="screen">
   body {
     background-color:#000;
     color:#00CD00;
     font-family: Tahoma, Geneva, sans-serif;
     font-size:2em;
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
<h4>Buses near our makerspace</h4>
</header>
<section>
<h5>Buses on Ashburnham Road</h5>
<?php
$urltoRichmond = "http://countdown.tfl.gov.uk/stopBoard/51750";
$urltoKingston  = "http://countdown.tfl.gov.uk/stopBoard/56822";
echo("<pre>");
foreach (array($urltoRichmond,$urltoKingston) as $url) {

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
<h5>Buses on Mariner Gardens</h5>
<?php
$urltoRichmond = "http://countdown.tfl.gov.uk/stopBoard/57780";
$urltoKingston  = "http://countdown.tfl.gov.uk/stopBoard/57522";
echo("<pre>");
foreach (array($urltoRichmond,$urltoKingston) as $url) {

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

</body>
</html>
