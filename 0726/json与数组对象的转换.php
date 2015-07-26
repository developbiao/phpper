<?php
/*
*@Describe:Json的学习
*@Author:GongBiao
*@Date:2015/07/26
*/
header('Content-Type:text/html; charset=utf-8');

$array_1 = array();
$array_2 = array();

$array_1['username'] = '小卡卡';
$array_1['hobby'] = '玩小狗';

//多维数组
$array_2['member']['chenglin']['username'] = '小宝宝';
$array_2['member']['chenglin']['hobby'] = '吃奶';

$array_2['member']['xiaotao']['username'] = '小小涛';
$array_2['member']['xiaotao']['hobby'] = '钓鱼';

//一维数组转JSON
$jsonObj1 = json_encode($array_1);
echo '<h3>一维数组转JSON</h3>';

echo '<pre>';
print_r($jsonObj1);
echo '</pre>';

//二维数组转json
$jsonObj2 = json_encode($array_2);

echo '<h3>多维数组转JSON</h3>';

echo '<pre>';
print_r($jsonObj2);
echo '</pre>';


//对象转JSON

class Person{
	public $name = 'Perter';
	public $age = 17;
	protected $sex = 'male';

	public function Say(){
		echo '<h3>Love You meimei!<h3>';
	}
}


//对象转Json
$perter = new Person();
$jsonObj3 = json_encode($perter);

echo '<h3>对象转JSON</h3>';
echo '<pre>';
print_r($jsonObj3);
echo '<pre>';

//JSON转对象
$jsonStr1 = '{"name":"GongBiao", "age":"17", "hobby":"maker"}';
$jsonStr2 = '{"member":{"xiaotao":{"hobby":"basekball", "age":"20"}, "sjun":{"hobby":"lualu", "age":"17"}}}';

$Obj1 = json_decode($jsonStr1);
$Obj2 = json_decode($jsonStr2);

echo '<h3>JSON转对象</h3>';
echo '<pre>';
print_r($Obj2);
echo '</pre>';

echo $Obj2->member->sjun->hobby;

echo '<br />';

//JSON转数组
echo '<h3>JSON转数组</h3>';
$arr1 = json_decode($jsonStr2, true);
echo '<pre>';
print_r($arr1);
echo '</pre>';


/* 
总结：
数组，对象转JSON: json_encode();
json字符转对象:json_decode();
json字符转数组:json_decode('jonsstr', true);

*/




?>
