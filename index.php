<?php

$presentTime = new DateTime();
$destinationTime = new DateTime('06-02-1995 12:06');
$interval = $presentTime->diff($destinationTime);

echo "Destination time : ".  $destinationTime->format('m-d-Y H:i');
echo '</br>';
echo "Present time : ". $presentTime->format('m-d-Y H:i');
echo '</br>';
echo "Durée qui sépare les deux dates : ". $interval->format('%m month %d days %y years %h hour %i min');