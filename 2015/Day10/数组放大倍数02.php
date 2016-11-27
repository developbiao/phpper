<?php
/*
@Description:把数组放大1倍
*/
header('Content-Type:text/html; charset=utf-8');
$arr = array(array(1,2,3), array(4,5,6), 7,8,9,10);


function arrtest($arr){
	//定义静态变量 防止递归存储时候覆盖数据
	static $farr = array();  //定义最终返回的数组
	static $j;   //定义一维指针
	for($i = 0; $i < count($arr); $i++){
		if(is_array($arr[$i])){
			//echo 'yes<br />';
			$flag = true;
			arrtest($arr[$i]);
		}else{
			$j++;

			$farr[$j] = ($arr[$i] *= 2);
		}
	}

	return $farr;

}

echo '<pre>';
print_r(arrtest($arr));
echo '</pre>';


?>
