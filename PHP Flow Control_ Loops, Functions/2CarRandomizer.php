<form method="post">
	<label>Enter cars:</label>
	<input type="text" name="cars"/>
	<input type="submit" value="Show result" /><br>
</form>
<?php 
	if (isset($_POST['cars'])) :
		if ($_POST['cars'] == '' ) {		
			echo "<p>Wrong input data</p>";
		} else {
			$colors = ['black', 'red', 'white', 'blue', 'green', 'yellow'];
			$cars = split(", ", $_POST['cars']);
?>		
		<table>
			<thead>
				<tr>
					<td>Car</td>
					<td>Color</td>
					<td>Count</td>
				</tr>
			</thead>
			<tbody>
<?php		foreach ($cars as $carName) :
				$color = $colors[rand(0,count($colors)-1)];
				$value = rand(1,5);
?>
				<tr>
					<td><?= $carName ?></td>
					<td><?= $color ?></td>
					<td><?= $value ?></td>
				</tr>
<?php				
			endforeach
?>
			</tbody>
		</table>
<?php
		}
	endif
?>