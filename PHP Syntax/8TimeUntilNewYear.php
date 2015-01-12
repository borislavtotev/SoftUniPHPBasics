<?php 
$now = getdate();
//make seconds and minutes to be always with 2 digits
$seconds = $now['seconds'];
if ($now['seconds'] < 10) {
	$seconds = '0'.$seconds;
} 

$minutes = $now['minutes'];
if ($now['minutes'] < 10) {
	$minutes = '0'.$minutes;
} 

$startDayString = $now["mday"].'-'.$now["mon"].'-'.$now["year"].' '.$now["hours"].":".$minutes.":".$seconds;
//echo $startDayString;
//$startDayString = "12-08-2014 13:07:09";

$startDate = date_create_from_format("d-m-Y G:i:s",$startDayString,timezone_open("Europe/Sofia"));
$year = $startDate->format('Y');

$yearEndString = "31-12-$year 23:59:59"; 
$yearEndDate = date_create_from_format("d-m-Y G:i:s",$yearEndString,timezone_open("Europe/Sofia"));

$interval = date_diff($startDate, $yearEndDate);
$hours   = $interval->days * 24 + $interval->h;
$minutes   = $hours * 60 + $interval->i;
$seconds   = $minutes * 60 + $interval->s;

echo "Hours until new year : $hours\n";
echo "Minutes until new year : $minutes\n";
echo "Seconds until new year : $seconds\n";
echo "Days:Hours:Minutes:Seconds $interval->days:$interval->h:$interval->i:$interval->s";
?>