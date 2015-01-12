<?php

$date = new DateTime('2015-01-01');
$newDate = clone $date;
$monthsArray = [];

for ($j = 1; $j <= 12; $j++) {
	$daysArray = [];
	$rows = 0;
	$daysArray[$rows] = [];
	$i = 1;
	
	while ($newDate->format("n") == $j) {
		$dayOfWeek = (int)$newDate -> format("w");	
		if ( ($dayOfWeek == 1) && ($i!= 1) ) {
			$rows++;
			$daysArray[$rows] = [];
		}
		
		if ($dayOfWeek == 0) {
			$dayOfWeek = 7;
		}
		$daysArray[$rows][$dayOfWeek] = $i;
		$newDate -> modify('+1 day');
		$i++;
	}
	$monthsArray[$j] = $daysArray;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Calendar</title>
	</head>
	<style>
		#wrapper {
			width: 820px;
		}
		body div {
			display: inline-block;
			width: 200px;
		}
	</style>
	<body>
		<h1><?= $date->format("Y") ?></h1>
		<div id="wrapper">
<?php
$months = ["Януари", "Февруари", "Март", "Април", "Май", "Юни", "Юли", "Август", "Септември", "Октоври", "Ноември", "Декември"];

for ($j = 1; $j <= 12; $j++) {
?>
		<div>
		<p><?= $months[$j-1] ?></p>	
		<table>
			<thead>
				<tr><td>По</td><td>Вт</td><td>Ср</td><td>Чт</td><td>Пе</td><td>Сб</td><td>Не</td></tr>	
			<thead>
			<tbody>
				<?php 
					$daysArray = $monthsArray[$j];
					
					$row = "";
					for ($i=0; $i < count($daysArray); $i++) {
						$row .= "<tr>";	 
						for ($k=1; $k <= 7; $k++) {
								$element = "";
								if (isset($daysArray[$i][$k])) {
									$element = $daysArray[$i][$k];
								}	 
	
								$row.="<td>$element</td>";
							}
						$row.= "</tr>\n";
					}
				?>
				<?= $row //print all rows for current month ?>
			</tbody>
		</table>
		</div>
<?php
}
//var_dump($monthsArray);
?>
		</div>	
	</body>
</html>