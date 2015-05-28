<?php
header('Content-Type:text/html; charset=utf-8');
function Sum($num){
	if($num == 1){
		return 1;
	}
	return $num + Sum($num - 1);
}

$var = Sum(100);

echo $var;
?>

