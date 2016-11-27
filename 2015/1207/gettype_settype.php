<?php
header('Content-Type:text/html; charset=utf-8');
$val = '123.33';
echo gettype($val);
echo '<br />';
//settype($val, 'integer'); //转成int 123
//settype($val, 'double'); //转成double 123.33
settype($val, 'boolean'); //转成boolean 1
echo gettype($val);
echo '<br />';
echo $val;

echo '<h3>Program excute!</h3>';
?>
