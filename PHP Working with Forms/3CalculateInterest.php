<!DOCTYPE HTML>
<html>
	<head>
		<title>Calculate Interest</title>
	</head>
	<body>
		<form method="post">
			<label>Enter Amount</label><input type="text" name="amount" /><br>
			<input type="radio" name="currency" value="usd" id="USD" /><label for="USD">USD</label>
			<input type="radio" name="currency" value="eur" id="EUR" /><label for="EUR">EUR</label>
			<input type="radio" name="currency" value="bgn" id="BGN" /><label for="BGN">BGN</label><br>			
			<label>Compount Interest Amount</label><input type="text" name="interest" /><br>
			<select name="period">
				<option value="6">6 Months</option>
				<option value="12">1 Year</option>
				<option value="24">2 Years</option>
				<option value="60">5 Years</option>								
			</select>
			<input type="submit" value="Calculate" />
		</form>
		<br>
<?php 
	$result = 0;
	$properInput = true;
	$currency = '';
	if ( $_SERVER['REQUEST_METHOD'] == 'POST' )  {	
		if (! isset($_POST['amount'])) {
			echo "<p>You have missed to enter the amount.</p>";
			$properInput = false;
		}
		
		if (! isset($_POST['currency'])) {
			echo "<p>You have missed to choose currency.</p>";
			$properInput = false;
		}
		
		if (! isset($_POST['interest'])) {
			echo "<p>ou have missed to enter Compount Interest Amount</p>";
			$properInput = false;
		}
		
		if (! isset($_POST['period'])) {
			echo "<p>You have missed to select interest period</p>";
			$properInput = false;
		}
		
		if ($properInput) {
			$amount = $_POST['amount'];
			$currency = $_POST['currency'];
			$period = (int)($_POST['period']);
			$interestRate = $_POST['interest']/12;
			
			$result = $amount;
			for ($i=1; $i <= $period ; $i++) { 
				$result*= (100+$interestRate);
				$result/=100;	
			}
		}
		
		if ($currency == "usd") {
			echo '$ '.Round($result,2);
		} else {
			echo Round($result,2).' '.strtoupper($currency);	
		}
	}
?>
	</body>
</html>