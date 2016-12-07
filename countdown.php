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
   font-size:6em;
   }
   h5 {
   margin-top: 0;
   }
   footer {
   font-size: 0.2em;
  bottom:0;
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
Contains OS data © Crown copyright and database rights 2016                     
-->

<header>
<h5>Buses from Ham Library</h5>
</header>
<?php
$apikey = "YourAPIKeyHere";
$nameID = "YourNameIDHere";

$stopnumber = "490003412W"; 
//west Find out your own bus stop number in the tfl website
display ($apikey, $nameID, $stopnumber);

$stopnumber = "490003412E";
//east Find out your own bus stop number in the tfl website
display ($apikey, $nameID, $stopnumber)


function display ($apikey, $nameID, $stopnumber)
   {
   $url = "https://api.tfl.gov.uk/StopPoint/$stopnumber/Arrivals?&app_id=$nameI\
D&app_key=$apikey";
   $result= file_get_contents($url);
   $info =  (json_decode($result,true));
   $line = 0;
   $time = array();
   foreach ($info as $key =>$row)
     {
     $time[$key] = $row["timeToStation"];
     }
 array_multisort($time, SORT_ASC, $info);

   foreach ($info as $bus )
     {
     $ordinal = $line + 1;
     echo '<span style="color:blue">';
     printf($ordinal);
     echo'</span>';
     printf(" ");
     printf($info[$line]["lineId"]);
     printf(" ");
     printf($info[$line]["towards"]);
     printf(" ");
     $timeForBus = gmdate("i", $info[$line]["timeToStation"]);
     if (strcmp($timeForBus, "00"))
       {
       $timeForBus = $timeForBus . " min";
       }
     else
       {
        $timeForBus = " due";
        }
      printf($timeForBus);
      printf(" ");
      echo("<br>");
      ++$line;
      if ( $line == 2 )
       {
       break;
       }
    }
}
?>
	<footer>
Contains OS data © Crown copyright and database rights 2016
</footer>

</body>
</html>
