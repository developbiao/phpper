<?php
/*
@Describe:测试百分比落点测试
@Author:GongBiao
@Date:2016/02/21
*/
header('Content-Type:text/html; charset=utf-8');

function getComputedPointValue($data, $rand_num){
	$length = count($data);
	$index = 0;

	for($i=$length; $i>0; $i--){
		if($rand_num <= $data[$i - 1]){
			$index = $i - 1;	
			break;
		}
	}

	$point_value = $data[$index];
	if($rand_num > $point_value && $rand_num <= $data[0]){
		--$index;
		$point_value = $data[$index];
	}else{
		$point_value = $data[0];
	}
	return  $data[$index];
}

function getComputedPotin($data, $rand_num){
	$length = count($data);
	$index = 0;

	for($i=$length; $i>0; $i--){
		if($rand_num <= $data[$i - 1]){
			$index = $i - 1;	
			break;
		}
	}

	$point_value = $data[$index];
	if($rand_num > $point_value && $rand_num <= $data[0]){
		--$index;
		$point_value = $data[$index];
	}else{
		$point_value = $data[0];
	}
	return $index;
}

//测试百分比或取
/*
$data = array(70, 25, 5);
for($i=0; $i<100; $i++){
	$rand_num = rand(0, 100);
	$result = getComputedPotinValue($data, $rand_num);
	echo 'rand_num is: '  . $rand_num . '<br />';
	echo 'point is : '  . $result . '<br />';
	echo '<hr />';
}
*/
//测试获取index point
$data = array(70, 25, 5);
for($i=0; $i<100; $i++){
	$rand_num = rand(0, 100);
	$index = getComputedPotin($data, $rand_num);
	echo 'rand_num is: '  . $rand_num . '<br />';
	echo 'index is :<b>'  . $index . '</b><br />';
	echo '<hr />';
}

?>
