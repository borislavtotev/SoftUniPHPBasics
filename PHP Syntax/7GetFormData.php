<!DOCTYPE HTML>
<html>
	<head>
		<title>Form Data</title>
	</head>
	<body>
		<form method="get" action="">
			<input type="text" name="name" placeholder="Name.." />
			<br/>
			<input type="text" name="age" placeholder="Age.." />
			<br/>
			<label for="male">Male</label>
			<input type="radio" name="gender" value="male" id="male" required="required" />
			<br/>
			<label for="female">Female</label>
			<input type="radio" name="gender" value="female" id="female" required="required" />
			<br/>
			<input type="submit" />
		</form>
		<p>
			<?php
				if ( isset($_GET["name"]) && isset($_GET["age"]) && isset($_GET["gender"]) ) {
					$name = $_GET["name"];
					$age = $_GET["age"];
					$gender = $_GET["gender"];
					echo "My name is $name. I am $age years old. I am $gender.";
				}
			?>
		</p>
	</body>
</html>