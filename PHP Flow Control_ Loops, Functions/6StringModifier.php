<form method="post">
	<input type="text" name="inputStr" />
	<input type="radio" name="options" value="palindrome" id="pal" /><label for="pal">Check Palindrome</label>
	<input type="radio" name="options" value="rev" id="rev" /><label for="rev">Reverse String</label>
	<input type="radio" name="options" value="splt" id="splt" /><label for="splt">Split</label>
	<input type="radio" name="options" value="hashStr" id="hash" /><label for="hash">Hash String</label>
	<input type="radio" name="options" value="shuff" id="shuf" /><label for="shuf">Shuffle String</label>				
	<input type="submit" />
</form>
<?php 
	if ( (isset($_POST['inputStr'])) && (!empty($_POST['inputStr']))) {
		$inputStr = $_POST['inputStr'];
		if (!isset($_POST['options'])) {
			$result = $inputStr;
		} else {
			$result = execute($inputStr, $_POST['options']);
		}
		
?>		
		<p><?= $result ?></p>
<?php
	}
	function execute($str, $operation) {
		return $operation($str);
	}
	function splt($str) {
		$out = str_split($str);
		return join($out," ");
	}
	function rev($str) {
		$out = str_split($str);
		$out = array_reverse($out);
		return join($out,"");
	}
	function hashStr($str) {
		return crypt($str,'$2a$09$anexamplestringforsalt$'); 
	}
	function shuff($str) {
		$out = str_split($str);
		shuffle($out);
		return join($out,""); 
	}
	function palindrome($str) {
		if (rev($str) === $str) {
			return $str." is a palindrome!";
		} else {
			return $str." is not a palindrome!";
		}
	}
?>
