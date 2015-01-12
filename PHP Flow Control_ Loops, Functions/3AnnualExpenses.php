<form method="post">
	<label>Enter number of years:</label>
	<input type="text" name="years"/>
	<input type="submit" value="Show costs" /><br>
</form>
<?php 
	if (isset($_POST['years'])) :
		if ( (intval($_POST['years']) == '') ) {		
			echo "<p>Wrong input data</p>";
		} else {
			$years = intval($_POST['years']);
			$date = new DateTime();
			$year = $date->format('Y');
?>		
		<table>
			<thead>
				<tr>
					<td>Year</td>
					<td>January</td>
					<td>February</td>
					<td>March</td>
					<td>April</td>
					<td>May</td>
					<td>June</td>
					<td>July</td>
					<td>August</td>
					<td>September</td>
					<td>October</td>
					<td>November</td>
					<td>December</td>
					<td>Total:</td>																														
				</tr>
			</thead>
			<tbody>
<?php		for ($i=0; $i < $years ; $i++) { 
				$sum = 0;
?>
			<tr>
				<td><?= $year-$i ?></td>
<?php
				for ($j=0; $j < 12; $j++) { 
					$expenditure = rand(0,999);
					$sum+=$expenditure;
?>
				<td><?= $expenditure ?></td>
<?php			}
?>			
				<td><?= $sum ?></td>
			</tr>				
<?php				
			}
?>
			</tbody>
		</table>
<?php
		}
	endif
?>