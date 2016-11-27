<?php
header('Content-Type:text/html; charset=utf-8');
//引用传值
$a = '1';
$b = &$a;    
$b = "2$b";  
echo $a, '<br />'; //'21'
echo $b, '<br />'; //'21'
echo '<h3>Program runing is ok!</h3>';

?>
