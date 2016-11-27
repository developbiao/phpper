<?php
/*
@Describe:php中常用的数组函数练习
@Author:GongBiao
@Date:2015/10/25 18:55
*/
header('Content-Type:text/html; charset=utf-8');
//shuffle把数组中的数打乱
$numbers = range(1, 20);
shuffle($numbers);
for($i = 0; $i < count($numbers); $i++){
	if($i == count($numbers) - 1){
		echo $numbers[$i];
	}else{
		echo $numbers[$i] . ',';
	}
}


echo '<h3>Programe runing is ok!</h3>'练习
exit;

//array_rand — 从数组中随机取出一个或多个单元 
$input = array('Neo', 'Morpheus', 'Trinity', 'Cypher', 'Thank');
$rand_keys = array_rand($input, 3);
echo $input[$rand_keys[0]] . '<br />';
echo $input[$rand_keys[1]] . '<br />';
echo $input[$rand_keys[2]] . '<br />';




//array_reverse翻转数组
$input = array('php', 4.0, array('green', 'red'));
$result = array_reverse($input);
$result_keyed = array_reverse($input ,true);

echo '<h3>----原始array---</h3>';
echo '<pre>';
print_r($input);
echo '</pre>';

echo '<h3>----result---</h3>';

echo '<pre>';
print_r($result);
echo '</pre>';

echo '<h3>----保留数字的键----</h3>';
echo '<pre>';
print_r($result_keyed);
echo '</pre>';


//array_uniuqe 移除数组中重复的值
$input = array('a' => 'green', 'red', 'b' => 'green', 'blue', 'red');
$result = array_unique($input);
echo '<pre>';
print_r($result);
echo '</pre>';

//range 建立一包含指定范围单元数组
foreach(range(10, 100, 5) as $number){
	echo $number . '<br />';
}
$array1 = array('a' => 'green', 'red', 'blue');
$array2 = array('b' => 'green', 'yellow', 'red');
$result = array_intersect($array1, $array2);


//键名也作为比较
$array1  = array( "a"  =>  "green" ,  "b"  =>  "brown" ,  "c"  =>  "blue" ,  "red" );
$array2  = array( "a"  =>  "green" ,  "b"  =>  "yellow" ,  "blue" ,  "red" );
$result = array_intersect_assoc($array1, $array2);

echo '<pre>';
print_r ( $result );
echo '</pre>';



//array_diff_assoc ,带索引检查计算数组的差集
$array1 = array('a' => 'green', 'b' => 'brown', 'c' => 'blue', 'red');
$array2 = array('a' => 'green', 'yellow', 'red');

$result = array_diff_assoc($array1, $array2);
echo '<pre>';
print_r ( $result );
echo '</pre>';


//array_diff 比较差集
$array1  = array( "a"  =>  "green" ,  "red" ,  "blue" ,  "red" );
$array2  = array( "b"  =>  "green" ,  "yellow" ,  "red" );
 $result  =  array_diff ( $array1 ,  $array2 );

echo '<pre>';
print_r ( $result );
echo '</pre>';

//array_merge_recursive 递归地合并一个或多个数组
$ar1 = array('color' => array('favorite' => 'red'), 5);
$ar2 = array(10, 'color' => array('favorite' => 'green', 'blue'));

$result = array_merge_recursive($ar1, $ar2);
echo '<pre>';
print_r($result);
echo '</pre>';


$array1 = array('color' => 'red', 2, 4);
$array2 = array('a', 'b', 'color' => 'green', 'shape' => 'trapezoid', 4);

$result = array_merge($array1, $array2);
echo '<pre>';
print_r($result);
echo '</pre>';


//数字键名将会被重新编号
$array1 = array();
$array2 = array(1 => 'data');
$result = array_merge($array1, $array2);
echo '<pre>';
print_r($result);
echo '</pre>';


//如果你想完全保留有数组并只想新的数组附加到后面，用+运算符:
$array1 = array(0 => 'zero_a', 2 => 'two_a', 3=>'three_a');
$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');

$result = $array1 + $array2;
echo '<pre>';
print_r($result);
echo '</pre>';


//usort 使用自定义比较函数对数组中的值进行排序*
//callable

function cmp($a ,$b){
	if($a == $b){
		return 0;
	}
	return ($a < $b) ? -1 : 1;
}

$a = array(3 ,2, 5, 6, 1);
usort($a, 'cmp');

echo '<pre>';
print_r($a);
echo '</pre>';

foreach ( $a  as  $key  =>  $value ) {
    echo  " $key :  $value \n" ;
    echo '<br />';
}


function cmp2($a, $b){
	//二进制安全字符串比较
	return strcmp($a['fruit'], $b['fruit']);
}

$fruits[0]['fruit'] = 'lemons';
$fruits[1]['fruit'] = 'apples';
$fruits[2]['fruit'] = 'grapes';

usort($fruits, 'cmp2');


echo '<pre>';
print_r($fruits);
echo '</pre>';




//rsort对数组逆向排序
$fruits = array('lemon', 'orange', 'banana', 'apple');
rsort($fruits); //fruits 被按照字母顺序逆向排序
foreach($fruits as $key => $val){
	echo "<h3>fruits as $key => $val</h3>";
}


//natsort 用自然排序算法对数组排序
$array1 = $array2 = array('img12.png','img10.png', 'img2.png', 'img1.png');

asort($array1);
echo '<h3>Standard sorting</h3>';
echo '<pre>';
print_r($array1);
echo '</pre>';

natsort($array2);
echo '<h3>Natural order sorting</h3>';
echo '<pre>';
print_r($array2);
echo '</pre>';



//in_array
$os = array('Mac', 'NT', 'Irix', 'Linux');
if (in_array('Irix', $os)){
	echo 'Got Irix';
}
if(in_array('mac', $os)){
	echo 'Got mac';
}

echo '<br />';

//严格的类型检查
$a = array('1.10', 12.4, 1.13);
if(in_array('12.4', $a, false)){
	echo "'12.4' fiound with strict check<br />";
}

if(in_array(1.13, $a , true)){
	echo "1.13 found with strict check<br />";
}


//array_keys 返回数组中的所有键名
$array = array(0 => 100, 'color' => 'red');
print_r(array_keys($array));

$array = array('blue', 'red', 'green', 'blue', 'blue');
print_r(array_keys($array));


//array_values 返回数组中的值
$array = array('size' => 'XL', 'color' => 'glod', 'sex' => 'girl');
echo '<pre>';
print_r(array_values($array));
echo '</pre>';



//array sum
$a = array(2, 4, 6, 8);
$b = array('a' => 1.2, 'b' => 2.3, 'c' => 3.4);

echo 'sum(a) =' . array_sum($a) . '<br />';
echo 'sum(b) =' . array_sum($b) . '<br />';


//array_flip 交换数组中的键和值

$trans = array('a' => 1, 'b' => 1, 'c' => 2);
$trans = array_flip($trans);
print_r($trans);


//array_filter 用回调函数过滤数组中的单元
//如果不有提供回调函数则返回值为true的数组元素
//$array1 = array('a' => true, 'b' => false, 'c' => true);
//print_r(array_filter($array1));

function odd ($var)
{
	// returns wheter the input integer is odd
	return ($var & 1);
}

function even ($var)
{
	//returns wheter the input integer is even
	return (!( $var & 1));
}

$array1 = array('a' =>1, 'b' => 2, 'c' => 3, 'd' => 4, 'c' => 5, 'e' => 6, 'f' => 7);
$array2 = array(6, 7, 8, 9, 10, 11, 12);

echo '<h3>Odd:</h3>';
echo '<pre>';
print_r(array_filter($array1, 'odd'));
echo '</pre>';

echo '<h3>Even:</h3>';
echo '<pre>';
print_r(array_filter($array2, 'even'));
echo '</pre>';

$a = array_fill(5, 6, 'bannana');
$b = array_fill(-2, 4, 'pear');
$array = array('a'=> 3, 'b' => 5, 'c' => 6);
$array = array_fill(1, 3, 'hello');
echo '<pre>';
print_r($a);
echo '</pre>';
echo '<pre>';
print_r($b);
echo '</pre>';
echo '<pre>';
print_r($array);
echo '</pre>';
//array_count_values  统计数组中所有的值出现的次数
$input_array = array(1, 'hello', 1, 'world', 'hello', 'biao');
echo '<pre>';
print_r(array_count_values($input_array));
echo '</pre>';

//array_pad 用值将数填补到指定的长度
$input = array(12, 10, 9);

$return = array_pad($input, 5, 8);

$return = array_pad($input, 7, -1);

$return = array_pad($input, 2, 'noop');


echo '<pre>';
print_r($return);
echo '</pre>';


//array_keys()返回input数组中的数字或者字符串的键名
$array = array(0 => 100, 'color' => 'red');
echo '<pre>';
print_r(array_keys($array));
echo '</pre>';

$array = array('blue', 'red', 'green', 'blue');
echo '<pre>';
print_r(array_keys($array, 'blue'));
echo '</pre>';

$array = array('color' => array('blue', 'red', 'green'),
				'size' => array('small', 'medium','large'));
echo '<pre>';
print_r(array_keys($array));
echo '</pre>';


//array_change_key_case 返回字符串键名全为小写或大写的数组
$input_array = array('First' => 1, 'SecOnd' => 4);
echo '<pre>';
print_r(array_change_key_case($input_array, CASE_UPPER));
echo '</pre>';


$input_array = array('ABC' =>1, 'EFD' => 2, 'GFD' => 3);
echo '<pre>';
print_r(array_change_key_case($input_array, CASE_LOWER));
echo '</pre>';

//测试取绝对值
$num = -7;
echo abs($num);



?>