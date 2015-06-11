<?php
header('Content-Type:text/html; charset=utf-8');

class Dog{
	public $leg = 4;   //狗有四条腿
	protected $bone = '猪腿骨';
	private $bite = '汪汪';


/*
	public function __isset($property){
		echo '你想判断我的',$property,'属性存在不存在？<br />';
		return 1;  //__isset被显示声明后判断被权威了,可以造假
	}
	*/

	public function __unset($property){
		echo '你想删除我的',$property,'属性?<br />';
	}
}

$ahuan = new Dog();
if(isset($ahuan->bite)){  //私有的无法判断

	echo 'Yes Existsted<br />';
}else{
	echo '不存在';
}

echo '<hr />';



/*

__isset()方法,默认private,protected无法判断
*/

?>
