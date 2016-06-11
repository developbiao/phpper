<?php
header('Content-Type:text/html; charset=utf-8');
$array = array();
$array['cmd'] = 'Jquery.testjson';
$array['name'] = 'gongbiao';
$array['age'] = 17;
$array['sex'] = 'male';

$data = json_encode($array);
echo $data;

?>