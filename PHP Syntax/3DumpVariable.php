<?php 
//$variable = "hello";
//$variable = 15;
//$variable = 1.234;
//$variable = array(1,2,3);
$variable = (object)[2,34];

if (gettype($variable) == "integer" || gettype($variable) == "double") {
	echo var_dump($variable);
} else {
	echo gettype($variable);
}



?>