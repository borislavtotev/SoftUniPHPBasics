<?php
$now = date('jS F, Y');
$month = strtolower(date("m",strtotime($now)));
$year = strtolower(date("Y",strtotime($now)));
$currentDate = date($year.'-'.$month.'-'.'01');

while (strtolower(date("m",strtotime($currentDate))) == $month) {
	if (strtolower(date("w",strtotime($currentDate)) == 0)) {
		echo date('jS F, Y',strtotime($currentDate))."\n";
	}
	$currentDate = date('jS F, Y', strtotime($currentDate . " + 1 day"));
} 
?>