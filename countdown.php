<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
 <title>Buses from Ham Library</title>
<meta http-equiv="refresh" content="16">
<meta name="viewport" content="width=device-width">
<meta name="apple-mobile-web-app-capable" content="yes" />
<style type="text/css" media="screen">
   body {
     background-color:#000;
     color:#FFA500;
     font-family: Tahoma, Geneva, sans-serif;
     font-size:5em;
   }
  </style>
</head>
<img src="huglogo.png" style="float:right" >
<body>
<!-- insert comment here -->
<!-- there is some php code here that can be found in
 https://github.com/KingstonMakerLabs/kml-tfl-countdown
please contribuite! This software is released under AGPL 3 or later
see https://www.gnu.org/licenses/agpl-3.0.html for more details.
-->
<header>
<h5>Buses from Ham Library</h5>
</header>
<?php
$name = "Ashburnham Road to Richmond";
$stopnumber = 51750;
display ($name,$stopnumber);

$name = "Ashburnham Road to Kingston";
$stopnumber = 56822;
display ($name,$stopnumber);



function display ($head,$num)
{
	$url = "http://countdown.tfl.gov.uk/stopBoard/$num";
   $result= file_get_contents($url);
   $info =  (json_decode($result,true));
   $line = 0;
   
 
   foreach ($info['arrivals'] as $bus ) {
  		++$line;
  		printf("%-2d %-4s %-16s%2d min \n",$line,$bus['routeName'],$bus['destination'],$bus['estimatedWait']);
                echo("<p></p>");
                if ( $line == 2 ) {
                   break;
                  }
//                else {
//                 echo "/n";
//                  }
 }
   echo("</pre>
   	</section>");
}
?>
</body>
</html>
