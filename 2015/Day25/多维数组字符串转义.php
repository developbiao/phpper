<?php
header('Content-Type:text/html; charset=utf-8');

//这是一个3维数组
$arr = array('a"b', array("c'd", array('e"f')));


//先写一个1维数组的转义函数

function _addslashes($arr){
	foreach($arr as $key=>$value){
		if(is_string($value)){
			$arr[$key] = addslashes($arr[$key]);
		}else if(is_array($value)){
			$arr[$key] = _addslashes($value);
		}

		return $arr;

	}
}



echo '<pre>';
print_r(_addslashes($arr));
echo '</pre>';
echo '<h3>程序已执行!</h3>';
?>
