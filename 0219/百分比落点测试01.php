<?php
/*
@Describe:测试百分比落点测试
*/
header('Content-Type:text/html; charset=utf-8');
$data = array(70, 40, 25, 5);
$rand_num = rand(0, 100);
//$rand_num = 3;

$abs_arr = array();
for($i=0; $i<count($data); $i++){
	$abs_arr[] = abs($data[$i] - $rand_num);
}

$min_value = min($abs_arr);
$min_index = array_search($min_value, $abs_arr);
echo 'min index: '. $min_index .'<br />';

$value = $data[$min_index];
$result = $value;
if($rand_num < $value && ($min_index+1) < (count($data) -1)){

	$result = $data[$min_index + 1];
}



echo 'rand_num is: '  . $rand_num . '<br />';
echo 'point is : '  . $result . '<br />';



?>
