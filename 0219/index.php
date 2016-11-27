<?php
/*
@Describe:测试百分比落点测试
*/
header('Content-Type:text/html; charset=utf-8');
$data = array(70, 25, 5);

$rand_num = rand(0, 100);
//$rand_num = 30;
$length = count($data);
$index = 0;

for($i=$length; $i>0; $i--){
	if($rand_num <= $data[$i - 1]){
		$index = $i - 1;	
		break;
	}
}


$result = $data[$index];

echo 'rand_num is: '  . $rand_num . '<br />';
echo 'point is : '  . $result . '<br />';



?>