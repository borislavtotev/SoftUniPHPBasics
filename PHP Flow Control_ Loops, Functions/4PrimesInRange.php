<form method="post">
	<label>Starting Index:</label>
	<input type="text" name="startIndex"/>
	<label>End:</label>
	<input type="text" name="endIndex"/>
	<input type="submit" /><br>
</form>
<?php 
	if (isset($_POST['startIndex']) && isset($_POST['endIndex'])) {
		if (intval($_POST['startIndex']) > intval($_POST['endIndex'])) {		
			echo "<p>Wrong input data</p>";
		} else {
			if (isPrime(intval($_POST['startIndex']))) {
				echo "<b>".intval($_POST['startIndex'])."</b>";	
			} else {
				echo intval($_POST['startIndex']);
			}
			for ($i=intval($_POST['startIndex'])+1; $i <=intval($_POST['endIndex']); $i++) {
				if (isPrime($i)) {
					echo ", <b>$i</b>";	
				} else {
					echo ", $i";
				}
			}
		}
	}
	
	function isPrime($num) {
		if ($num <= 1) {
			return false;
		}	
		
		$prime = true;
		for ($i=2; $i <= sqrt($num); $i++) { 
			if ($num % $i == 0) {
				$prime = false;
				break;
			}
		}
		return $prime;
	}
?>