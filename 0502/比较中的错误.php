<?php
header('Content-Type:text/html; charset=utf-8');
$a = 1;
$b = 2;
$c = 3;
if($c > $b > $a){ //提错误
	echo 'yes<br />';
}else{
	echo 'no<br />';
}
echo '<h3>Program runing is ok!</h3>';
?>
