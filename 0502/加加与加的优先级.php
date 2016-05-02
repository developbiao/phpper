<?php
header('Content-Type:text/html; charset=utf-8');
//下面的输出结果是什么
$x = 5;
echo $x;
echo '<br />';     //5
echo $x+++$x++;    //11
echo '<br />';
echo $x; 	   //7
echo '<br />';
echo $x---$x--; // 1
echo '<br />';
echo $x;

echo '<h3>Program runing is ok!</h3>';

?>
