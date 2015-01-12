<!DOCTYPE HTML>
<html>
	<head>
		<title>Print Most Frequent Tag</title>
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
$newTags = [];
$mostFrequentElement = '';
 
if (isset($_POST['tags'])) {
	$tagsString = htmLentities($_POST['tags']);	
	$tags = explode(", ", $tagsString);
	
	foreach ($tags as $tag) {
		 if (array_key_exists($tag, $newTags)) {
			$newTags[$tag]++;		 	
		 } else {
		 	$newTags[$tag] = 1;
		 }
	}	
}
if (count($newTags) >= 1) {
	arsort($newTags);	
	foreach ($newTags as $key => $value) {
		if ($mostFrequentElement === '') {
			$mostFrequentElement = $key;
		}
		$result.= "$key : $value times <br>	";
	}
	$result.= "<p>Most Frequent Tag is: $mostFrequentElement</p>";
}
?>
		<div id="output">
			<?= $result ?>
		</div>

	</body>
</html>