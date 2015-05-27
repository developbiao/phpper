<?php
header("Content-Type:text/html; charset=utf-8");

/*
游标操作
current()
next();
prev()
end();
*/

$arr = array('a', 'b', 'c', 'd');

//echo current($arr);
//echo next($arr);

echo prev($arr);

echo end($arr);

reset($arr);

echo current($arr);



?>
