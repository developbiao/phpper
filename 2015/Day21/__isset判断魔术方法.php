<?php
header('Content-Type:text/html; charset=utf-8');

class Dog{
	public $leg = 4;   //狗有四条腿
	protected $bone = '猪腿骨';


	public function __isset($property){
		echo '你想判断我的',$property,'属性存在不存在？<br />';
		return 1;  //__isset被显示声明后判断被权威了,可以造假
	}

	public function __unset($property){
		echo '你想删除我的',$property,'属性?<br />';
	}
}

$ahuan = new Dog();
if(isset($ahuan->leg)){

	//echo $ahuan->$leg;
	echo 'Yes Existsted<br />';
}

if(isset($ahuan->tail)){
	echo '阿黄有一只摆来摆去可爱的尾巴<br />';
}else{
	echo '不存在';
}

/*

__isset()方法
当用isset()判断对象不可见的属性时（protectd/private/不存在的属性会引发
__isset()来执行
*/

?>
