<?php
header('Content-Type:text/html; charset=utf-8');

/*
经典的练习例子：
动态创建属性,修改，删除

*/

class UserModel{
	protected $username = '小小山';
	protected $email = 'developbiao@gmail.com';
	public $data = array();


	//增加属性
	public function __set($key, $value){
		$this->data[$key] = $value;

	}

	//获取加属性
	public function __get($property){
		return isset($this->data[$property]) ? $this->data[$property] : NULL;		
	}


	//删除属性
	public function __unset($property){

		 unset($this->data[$property]);

	}


	//判断属性
	public function __isset($property){

		return isset($this->data[$perperty]);

	}


	//返回sql拼接后的sql语句

	public function add(){

		$sql = 'INSERT INTO table1(';
		$sql .= implode(',',array_keys($data));
		$sql .= ')VALUES (\'';
		$sql .= implode(',',array_values($data));
		$sql .= '\')';


		return $sql;


	}


}



//使用UserModel类

$userModel = new UserModel();


//开始操作useModel类

$userModel->hobby = '弹钢琴';
$userModel->qq = '614319951';
$userModel->user = 'Aliax';

unset($userModel->qq);

$userModel->email = 'gongbiao@gmail.com';


echo '<pre>';
print_r($userModel);
echo '</pre>';
?>

