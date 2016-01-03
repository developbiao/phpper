<?php
header("Content-Type:text/html; charset=utf-8");

$arr = array('a', 'b', 'c', 'd');
$arr[99] = 'e';
$arr['stu'] = array('li', 'wang');

echo '<pre>';
print_r($arr);
echo '</pre>';

echo '<br />';

echo $arr['stu']['0'] = '美女老师';


$arr['stu'][0] = '美女老师我爱你';
//删除单元
unset($arr[3]);
echo '<pre>';
print_r($arr);
echo '</pre>';


?>
