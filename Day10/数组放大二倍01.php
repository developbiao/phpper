<?php
/*
@Description:把数组放大1倍
*/
header('Content-Type:text/html; charset=utf-8');
$arr = array(array(1,2,3), array(4,5,6), 7,8,9,10);

function arrtest($arr){
	foreach($arr as $key => $value){
		if(is_array($value)){

			arrtest($value);

		}else{
			if(is_numeric($value)){
				$value *= 2;
				$arr[$key] = $value;
			}
		}
	}

	return $arr; //返回$arr

}


echo '<pre>';
print_r(arrtest($arr));
echo '</pre>';


?>
