<?php
header('Content-Type:text/html; charset=utf-8');

//常用的6个在项目中，尤其是自己写写框架时，很实用的几个函数
//__call(), __callStaic(), __get(), __set(), __isset(), __unset()

class People{
	private $money = '30两银子';
	protected $age = 17;
	public $name = 'lily';

	public function __get($property){
		echo '你想访问我的', $property,'属性:)<br />';
	}
}


$lily = new People();
$lily->age;   //你想访问我的年龄?
$lily->money; //你想访问我的money年龄


//人为的加属性
$lily->aaaa = '内衣';
$lily->bbbb = '性感身材';

print_r($lily);
/*
其实，对象就是一个属性集，在js中更时显
如果这么随便就能加了属性，导致这个对象属性过多，不好管理
*/

?>
