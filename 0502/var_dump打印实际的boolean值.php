<?php
header('Content-Type:text/html; charset=utf-8');
//下面的输出是true还是false?
echo 0123; //83 因为转换成8进制数
echo '<br />';
var_dump(0123 == 123); 			//false
var_dump('0123' == 123); 		//true
var_dump('0123' === 123); 		//false
echo '<h3>Program runing is ok!</h3>';

?>
