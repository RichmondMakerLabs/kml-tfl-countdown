<html>
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
     font-size:1.6em;
   }
  </style>

</head>
<body>
<?php
$urltoRichmond = "http://countdown.tfl.gov.uk/stopBoard/51750";
$urltoKingston  = "http://countdown.tfl.gov.uk/stopBoard/56822";
echo("<pre>");
foreach (array($urltoRichmond,$urltoKingston) as $url) {

  $result= file_get_contents($url);
  $info =  (json_decode($result,true));
	print("\nLast updated " . $info['lastUpdated'] . "\nFrom Ashburnham Road\n" );
  $line = 0;
  foreach ($info['arrivals'] as $bus ) {
  		++$line;
  		printf("%-2d %-4s %-15s %2d min\n",$line,$bus['routeName'],$bus['destination'],$bus['estimatedWait']);
  }
}
echo("</pre>");
?>
</body>
</html>
