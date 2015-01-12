<?php
$n = 145;
$foundValues = false;

for ($i = 100; $i <= $n; $i++) {
	if (substr((string)$i, 0, 1) != substr((string)$i, 1, 1) && substr((string)$i, 0, 1) != substr((string)$i, 2, 1) && substr((string)$i, 1, 1) != substr((string)$i, 2, 1)) {
		if (!$foundValues) {
			echo $i;
		} else {
			echo ', '.$i;
		}
		$foundValues = true;
	}
}

if (! $foundValues) {
	echo "no";
}
?>