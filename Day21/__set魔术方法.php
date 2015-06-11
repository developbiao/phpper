<?php
header('Content-Type:text/html; charset=utf-8');

class Stu {
	public $name = 'Liuru';
	protected $age = 23;
	private $money = '78两银子';

	public function __set($key, $value){  //__set魔术方法被显示后，乱私自加属性就不会添加进来
		echo '你想设置我的',$key, '属性------Value：', $value,'<br />';

	}
}


echo '<hr />';
echo '<center>';

$liuru = new Stu();
$liuru->phone = '1578322222233';
$liuru->hobby = '寻找周杰伦';
echo '<pre>';
print_r($liuru);
echo '</pre>';

//调用自己设置的属性看看设备成功没有？
if(isset($liuru->hobby)){
	echo '添加属性成功！';
}else{
	echo '添加属性失败!';
}
echo '</center>';


/*
总结：
当为无权操作的属性赋值时
或不存在的属性赋值时
__set()自动调用
*/
?>
