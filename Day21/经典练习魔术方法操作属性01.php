<?php
header('Content-Type:text/html; charset=utf-8');

/*
经典的练习例子：
动态创建属性,修改，删除

*/
class UserModel{
	protected $eamil = 'user@163.com';
	protected $data = array();

	public function __set($k, $v){   //添加属性
		$this->data[$k] = $v; //把值放到data数组里面
	}

	public function __get($p){ //获取属性
		return isset($this->data[$p]) ? $this->data[$p] : NULL;
	}

	public function __unset($p){ //删除属性
		unset($this->data[$p]);

	}

	public function __isset($p){  //判断属性
		return isset($this->data[$p]);
	}

	public function add(){
		$sql = 'INSERT INTO table1 (';
		$sql .= implode(',', array_keys($this->data));
		$sql .= ')VALUES (\'';
		$sql .= implode("','", array_keys($this->data));
		$sql .= "')";
		return $sql;

	}


}


$userModel = new UserModel();
echo "<pre>";
print_r($userModel);
echo "</pre>";

$userModel->username = 'lisi'; //add 添加属性
$userModel->eamil = 'lisi@126.com';
$userModel->username = '小涛'; //修改
$userModel->hobby = '勾鱼';

unset($userModel->hobby); //保护鱼儿
$userModel->hobby = '看电影'; //重新找个hobby

echo "<pre>";
print_r($userModel);
echo "</pre>";

echo '--判断属性存在不---<br />';
if(isset($userModel->hobby)){
	echo '<h3>小涛的爱好是,',$userModel->hobby,'</h3>';
}else{
	echo '小涛目前还没有什么爱好';
}

echo '<hr />';
echo $userModel->add();  //打印SQL语句

?>
