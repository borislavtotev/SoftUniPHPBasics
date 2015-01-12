<?php 
$firstNumber = 2;
$secondNumber = 5; 
//echo '$firstNumber + $secondNumber = ' . $firstNumber . ' + ' . $secondNumber .' = ' . number_format((float)($firstNumber+$secondNumber),2,'.','');
echo '$firstNumber + $secondNumber = ' . $firstNumber . ' + ' . $secondNumber .' = ' . sprintf("%0.2f",$firstNumber+$secondNumber); //this is short
?>