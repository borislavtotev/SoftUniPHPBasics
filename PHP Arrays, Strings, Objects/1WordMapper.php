<form method="post">
	<textarea name="input"></textarea><br>
	<input type="submit" value="Count words" /><br>
</form>
<?php 
if (isset($_POST['input'])) :
	$input = $_POST['input'];
	
	$pattern = '/\b(\w+)\b/';
	preg_match_all($pattern, $input, $results, PREG_SET_ORDER);
	
	$words = [];
	
	foreach ($results as $match) {
	    $word = strtolower(trim($match[1]));
		isset($words[$word]) ? $words[$word]++ : $words[$word]=1;
	}
	?>
	<table>
	<?php foreach ($words as $key => $value) : ?>
		<tr><td><?= $key ?></td><td><?= htmlentities($value) ?></td></tr>
	<?php endforeach; ?>
	</table>	
<?php endif; ?>