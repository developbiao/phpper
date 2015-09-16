<?php
//float 精度控制
function randomFloat($min = 0, $max = 1) {
		return $min + mt_rand() / mt_getrandmax() * ($max - $min);
	}

	$var = 33;
 	$num =  randomFloat();
 	$ft =  sprintf("%.3f", $num);
 	echo $var + $ft;

?>
