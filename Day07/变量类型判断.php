<?php
header('Content-Type:text/html; charset=utf-8');
$var = 'is_float';
echo gettype($var);
echo '<br />';
$a = 3;
if(is_Integer($a)){
	echo 'a是整型';
}else{
	echo 'a不是整型';
}
?>
