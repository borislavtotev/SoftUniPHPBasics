<DOCTYPE HTML>
<html>
	<head>
		<title>HTML Tags Counter</title>
	</head>
	<body>
		<form method="post">
			<label>Enter HTML Tags</label><br>
			<input type="text" name="tag" />
			<input type="submit" />
		</form>
		<br>
<?php 
	session_start();
	if (!isset($_SESSION['tags'])) {
   		$_SESSION['tags'] = [];
	} 
 
 $htmlTags = array('html', 'head', 'title', 'base', 'link', 'meta', 'style',
			'script', 'noscript', 'template', 'body', 'section', 'nav',
			'article', 'aside', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6',
			'header', 'footer', 'address', 'main', 'p', 'hr', 'pre',
			'blockquote', 'ol', 'ul', 'li', 'dl', 'dt', 'figure',
			'figcaption', 'div', 'a', 'em', 'strong', 'small', 's',
			'cite', 'q', 'dfn', 'abbr', 'data', 'time', 'code', 'var',
			'samp', 'kbd', 'sub', 'sup', 'i', 'b', 'u', 'mark', 'ruby',
			'rt', 'rp', 'bdi', 'bdo', 'span', 'br', 'wbr', 'ins', 'del',
			'img', 'iframe', 'embed', 'object', 'param', 'video', 'audio',
			'source', 'track', 'canvas', 'map', 'area', 'svg', 'math',
			'table', 'caption', 'colgroup', 'col', 'tbody', 'thead',
			'tfoot', 'tr', 'td', 'th', 'form', 'fieldset', 'legend',
			'label', 'input', 'button', 'select', 'datalist', 'optgroup',
			'option', 'textarea', 'keygen', 'output', 'progress',
			'meter', 'details', 'summary', 'menuitem', 'menu');
		
	if (isset($_POST['tag'])) {
		if (in_array($_POST['tag'],$htmlTags)) {
			echo "Valid HTML tag!<br>";
			array_push($_SESSION['tags'],$_POST['tag']);
		} else {
			echo "Invalid HTML tag!<br>";
		}
		echo 'Score: '.count($_SESSION['tags']); 	
	} 
		
?>
	</body>
</html>