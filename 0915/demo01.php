<?php
function randomFloat($min = 0, $max = 1) {
		return $min + mt_rand() / mt_getrandmax() * ($max - $min);
	}

 	echo randomFloat();
?>