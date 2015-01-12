<form method="post">
	<label>text:</label><textarea name="inputText"></textarea><br>
	<input type="submit" value="Filter" />
</form>
<?php 
	header('Content-Type: text/html; charset=utf-8');
	mb_internal_encoding('utf8');
	if (isset($_POST['inputText']) && (!empty($_POST['inputText'])) ) {
		$inputText = $_POST['inputText'];
		$pattern = "/<a[^>]href=['\"]?([^<]+?)['\"]?>(.*?)<\/a>/";
		$results = preg_replace_callback($pattern, 'changeLinks', $inputText);
?>
		<p><?=htmlentities($results)?></p>
<?php
	} 
	function changeLinks($match) {
		$url = $match[1];
		$text = $match[2];
		return "[URL=${url}]${text}[/URL]";
	}
?>