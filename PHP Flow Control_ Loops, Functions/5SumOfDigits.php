<form method="post">
	<label>Input string:</label>
	<input type="text" name="integers"/>
	<input type="submit" /><br>
</form>
<?php 
	if ( (isset($_POST['integers'])) && (!empty($_POST['integers']))) :
		$numbers = split(", ", $_POST['integers']);
?>		
		<table>
			<tbody>
<?php		foreach ($numbers as $number) :
				if (!is_numeric($number)) {			
					$result = 'I cannot sum that';
				} else {
					$result = array_sum(str_split($number));
				}
?>
				<tr>
					<td><?= $number ?></td>
					<td><?= $result ?></td>
				</tr>
<?php				
			endforeach
?>
			</tbody>
		</table>
<?php
	endif
?>