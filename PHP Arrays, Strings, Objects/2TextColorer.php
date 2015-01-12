<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Text Colored</title>
		<style>
			.blue {
				color: blue;
			}
			.red {
				color: red;
			}
		</style>
	</head>
	<body>
		<form method="post">
			<textarea name="input"></textarea><br>
			<input type="submit" value="Color text" /><br>
		</form>
<?php 
mb_internal_encoding("utf-8");

if (isset($_POST['input'])) :
	$input = $_POST['input'];
	$count = mb_strlen($input);
	
	for ($i=0; $i < $count; $i++) :
		$letter = mb_substr($input, $i, 1);	
		
		if (ord($letter) % 2) {
?>
			<span class='blue'><?= htmlentities($letter) ?></span>
<?php 	} else { ?>
			<span class='red'><?= htmlentities($letter) ?></span>
<?php 	}		
	endfor;
			
endif; ?>
	</body>
</html>