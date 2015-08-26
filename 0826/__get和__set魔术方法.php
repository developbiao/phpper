<?php
/*
经典练习例子:
动态创建属性，修改，删除
*/
header('Content-Type:text/html; charset=utf-8');

class People{
	private $money = '70刀';
	protected $age = 17;
	public $name = 'lily';

	public function __get($property){
			echo '<h3>你想访问我的', $property, '属性:)</h3>';
	}

	public function __set($key, $value){
			echo '<h3>你想设置我的', $key, '属性为--->', $value,'</h3>';

	}
}


$lily = new People();
$lily->age;
$lily->money;


//人为添加属性
$lily->body = '性感的美女!';
/*
$lily->sayhello = function(){
	echo '大家好，好久不见!<br />';
};
*/


echo $lily->body; 
echo '<pre>';
print_r($lily);
echo '</pre>';


echo '<h3>Program runing is ok!</h3>';

?>
