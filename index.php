<?php

$ip="118.67.228.162";

$location = file_get_contents('http://freegeoip.net/json/'.$location);
 

 print_r($location);



?>