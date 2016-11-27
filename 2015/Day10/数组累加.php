<?php
header('Content-Type:text/html; charset=utf-8');
$arr = array(array(1,2,3), array(4,5,6), 7,8,9,10);

function arrsum($arr){
	static $sum = 0;
	foreach($arr as $value){
		if(is_array($value)){
			arrsum($value);
		}else{
			$sum+=$value;
		}
	}

	return $sum;

}

echo arrsum($arr);
?>
