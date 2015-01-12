<!DOCTYPE HTML>
<html>
	<head>
		<title>Print Tags</title>
	</head>
	<body>
		<form method="post">
			<p>Enter Tags:</p>
			<input type="text" name="tags" />
			<input type="submit" />
		</form>
		<br>
<?php
$result = '';
$tags = []; 
if (isset($_POST['tags'])) {
	$tagsString = htmLentities($_POST['tags']);	
	$tags = explode(", ", $tagsString);	
}
if (count($tags) >= 1) {
	for ($i=0; $i < count($tags) ; $i++) { 
		$result.= "$i : $tags[$i] <br>";
	}
} 
?>
		<div id="output">
			<?= $result ?>
		</div>	
	</body>
</html>