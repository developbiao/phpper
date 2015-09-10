<?php
header('Content-Type:text/html; charset=utf-8');
//jsone 数据转字符串
$strdata = '{"name":"xiaobai", "age":"15", "home":"sic"}';
$data = json_decode($strdata, true);
echo '<pre>';
print_r($data);
echo '</pre>';

echo '<h3>程序运行完成!</h3>';
?>
