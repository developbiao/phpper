<?php
header('Content-Type:text/html; charset=utf-8');
function t(){
	static $a = 3;
	$a++;
}

echo t(),'<br />';
echo t(),'<br />';
echo t(),'<br />';
echo t(),'<br />';
?>


