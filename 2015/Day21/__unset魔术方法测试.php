<?php
header('Content-Type:text/html; charset=utf-8');

class Dog{
	public $leg = 4;   //狗有四条腿
	protected $bone = '猪腿骨';
	private $bite = '汪汪';


	public function __isset($property){
		echo '你想判断我的',$property,'属性存在不存在？<br />';
		return 1;  //__isset被显示声明后判断被权威了,可以造假
	}

	public function __unset($property){
		echo '你想删除我的',$property,'属性?<br />';
		//return 0;  返回值没有作用
	}
}

$ahuan = new Dog();

//unset测试


//befor
echo '<pre>';
print_r($ahuan);
echo '</pre>';


//after
unset($ahuan->bite); //无效对私有属性删除
unset($ahuan->leg); //去除了ahuan的leg属性

//没有的属性或者private,protected会被触发显示的__unset();
unset($ahuan->bone);
unset($ahuan->dine);
unset($ahuan->haha);

echo '<pre>';
print_r($ahuan);
echo '</pre>';



/*

__isset()方法,默认private,protected无法判断
*/

?>
