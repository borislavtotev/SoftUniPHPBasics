<form method="post">
	<label>text:</label><textarea name="inputText"></textarea><br>
	<label>word:</label><input type="text" name="word" /><br>
	<input type="submit" value="Filter" />
</form>
<?php 
	header('Content-Type: text/html; charset=utf-8');
	mb_internal_encoding('utf8');
	if (isset($_POST['inputText']) && isset($_POST['word']) && (!empty($_POST['inputText'])) && (!empty($_POST['word'])) ) {
		$inputText = $_POST['inputText'];
		$word = $_POST['word'];
		
		$pattern = "/([^.!?]+[.|!|?])/";
		preg_match_all($pattern, $inputText, $results, PREG_SET_ORDER);
		foreach ($results as $match) {
    		$sentence = trim($match[1]);
    		if (preg_match("/\b$word\b/", $sentence)) {
?>	
			<?=htmlentities($sentence) ?><br>
<?php
   			}
		}
	 } 
?>