<html>
<head>
<title> KML countdown</title>
<meta http-equiv="refresh" content="32">

</head>
<body>
<?php
$urltoRichmond = "http://countdown.tfl.gov.uk/stopBoard/51750";
$urltoKingston  = "http://countdown.tfl.gov.uk/stopBoard/56822";

foreach (array($urltoRichmond,$urltoKingston) as $url) {

  $result= file_get_contents($url);
  $info =  (json_decode($result,true));
	print("<br/>Last updated: " . $info['lastUpdated'] . ".\n<br/>" );
  foreach ($info['arrivals'] as $bus ) {
		print ("Next " . $bus['routeName'] . " bus to " . 
		$bus['destination'] . "  " . $bus['estimatedWait'] . ".\n<br/>"  );
  }
}

?>
</body>
</html>

