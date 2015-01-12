<form method="post">
	<label>text:</label><textarea name="inputText"></textarea><br>
	<label>banlist:</label><input type="text" name="banlist" /><br>
	<input type="submit" value="Filter" />
</form>
<?php 
	header('Content-Type: text/html; charset=utf-8');
	mb_internal_encoding('utf8');
	if (isset($_POST['inputText']) && isset($_POST['banlist']) && (!empty($_POST['inputText'])) && (!empty($_POST['banlist'])) ) {
		$inputText = $_POST['inputText'];
		$banlist = split(", ", $_POST['banlist']);
		
		foreach ($banlist as $word) {
			$pattern = "/\b$word\b/";
			$inputText = preg_replace($pattern, str_repeat("*", mb_strlen($word)), $inputText);
		}
?>
	<p><?= htmlentities($inputText) ?></p>
<?php } ?>