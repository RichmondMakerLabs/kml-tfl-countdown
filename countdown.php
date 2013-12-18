<?php
$urltoRichmond = "http://countdown.tfl.gov.uk/stopBoard/51750";
$urltoKingston  = "http://countdown.tfl.gov.uk/stopBoard/56822";

foreach (array($urltoRichmond,$urltoKingston) as $url) {

  $result= file_get_contents($url);
  $info =  (json_decode($result,true));

  foreach ($info['arrivals'] as $bus ) {
		print ("Next " . $bus['routeName'] . " bus to " . $bus['destination'] . "  " . $bus['estimatedWait'] . ".\n"  );
  }
}

?>
