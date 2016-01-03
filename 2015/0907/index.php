<?php
/*
*@Describe:php常用数组函数练习
*@Author:GongBiao
*@Date:2015/09/08
*/
//-------------array_change_key_case返回字符串键名全为小写字或大写的数组//
/*
$input_arry = array('First' => 1, "Second" => 4);
echo 'CaseUpper:<pre>';
print_r(array_change_key_case($input_arry, CASE_UPPER));
echo '</pre>';
*/

//------------array_chunk()把一个数组分割为新的数组块----//
/*
$input_array = array('a', 'b', 'c', 'd', 'e');
echo '<pre>';
print_r(array_chunk($input_array, 2));
print_r(array_chunk($input_array, 2, true)); //第三个参数为true时保留原键值
echo '</pre>';
*/

//-----------array_combine()通过合并两个数组来创建一个新数组-----------//

/*
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'baanna');
$c = array_combine($a, $b);

echo '<pre>';
print_r($c);
echo '</pre>';
*/

//-----------array_count_values用于统计数组中所有出现的次数-----------//
/*
$arry = array(1, 'hello', 1, 'world', 'hello', 'ok');
echo '<pre>';
print_r(array_count_values($arry));
echo '</pre>';
*/


//--------array_diff() ----返回两个数组的差集数组------//
/*
$array1 = array('a' => 'green', 'red', 'blue', 'red');
$array2 = array('b' => 'green', 'yellow', 'red');
$result = array_diff($array2, $array1);
echo '<pre>';
print_r($result);
echo '</pre>';
*/


//-----array_diff_assoc() 比较键名和键值，并返回两个数组的差集数组-----//
/*
$array1 = array('a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red');
$array2 = array('a' => 'green', 'yellow', 'red');
$result = array_diff_assoc($array1, $array2);
*/
/*
$array1 = array(0, 1, 2);
$array2 = array('00', '01', '2');
$result = array_diff_assoc($array1, $array2);
echo '<pre>';
print_r($result);
echo '</pre>';
*/

//------------array_diff_key() 比较键名，并返回两数组的差集数组-----------------//
/*
$array1 = array('blue' => 1, 'red' => 2, 'green' => 3, 'purple' => 4);
$array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7);
$result = array_diff_key($array1, $array2);
echo '<pre>';
print_r($result);
echo '</pre>';
*/
//------------array_diff_uassoc() 通过回调函数比较，并返回两数组的差集数组-----------------//
/*
$array1  = array( "a"  =>  "green" ,  "b"  =>  "brown" ,  "c"  =>  "blue" ,  "red" );
$array2  = array( "a"  =>  "green" ,  "yellow" ,  "red" );
$result = array_diff_uassoc($array1, $array2, 'key_compare_func');

function key_compare_func($a ,$b){
	if($a == $b){
		return 0;
	}
	return ($a > $b) ? 1 : -1;
}

echo '<pre>';
print_r($result);
echo '</pre>';
*/

//------------array_diff_ukey() 通过回调函数比较键名计算，并返回两数组的差集数组-----------------//
function key_compare_func($key1, $key2){
	if($key1 == $key2){
		return 0;
	}else if($key1 > $key2){
		return 1;
	}else{
		return -1;
	}

}
$array1  = array( 'blue'   =>  1 ,  'red'   =>  2 ,  'green'   =>  3 ,  'purple'  =>  4 );
$array2  = array( 'green'  =>  5 ,  'blue'  =>  6 ,  'yellow'  =>  7 ,  'cyan'    =>  8 );
$result = array_diff_ukey($array1, $array2, 'key_compare_func');

echo '<pre>';
print_r($result);
echo '</pre>';

echo 'Program runing is ok!<br />';

?>