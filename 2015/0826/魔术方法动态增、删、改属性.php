<?php
/*
经典练习例子:
动态创建属性，修改，删除
*/
header('Content-Type:text/html; charset=utf-8');

class UserModel{
	protected $username = '小小山';
	protected $email = 'java770520@163.com';
	public $data = array(); //定义一个动态的数组对象

	//增加属性
	public function __set($key, $value){
		$this->data[$key] = $value;
	}


	//获取属性
	public function __get($property){
		return isset($this->data[$property]) ? $this->data[$property] : NULL;
	}

	//删除属性
	public function __unset($property){
		unset($this->data[$property]);
	}


	//判断属性
	public function __isset($property){
		return isset($this->data[$property]);
	}


	//返回sql拼接后的语句
	public function createSql(){
		$sql = 'INSERT INTO table_name(';
		$sql .= implode(',', array_keys($this->data)); 
		$sql .= ')VALUES (\'';
		$sql .= implode(',', array_values($this->data));
		$sql .= '\')';

		return $sql;

	}



}

//使用UserModel类
$huage = new UserModel();

//开始操作UserModel类

$huage -> hobby = '泡妞';
$huage -> qq = '7567823';
$huage -> user = 'HuaShao';
$huage -> email = '7567823@qq.com';
$huage -> grilfirend = '神仙姐姐';

//删除hobby
unset($huage->hobby);

//添加爱好
$huage -> hobby = '看书';

//修改爱好
$huage -> hobby = '飞车';

echo '<h3>',$huage -> createSql(),'</h3>';


if(isset($huage->grilfirend)){
	echo '华哥有女朋友了<br />';
}else{
	echo '华哥正需要一个女朋友<br />';
}



echo '<h3>Program runing is ok!</h3>';

?>
