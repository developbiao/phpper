<?php
/*
学习笔记：
构造函数也是可以继承的
*/
header('Content-Type:text/html; charset=utf-8');

//Mysql操作类继承父类功能的扩展

class Mysql{
	protected $conn = NULL;
	public function __construct(){ //初始化链接
		$this->conn = mysql_connect('localhost:3306', 'root', '123456');
	}

	//查询方法
	public function query($sql){
		return mysql_query($sql, $this->conn);
	}


}


/*
$mysql = new Mysql();
var_dump($mysql->query('USE test'));  //测试是否链接成功 true
*/

class MysqlEx extends Mysql{

	private $port = NULL; //加入端口
	public function __construct($port){   //重写了继承过父类的参数

		//有了保险，选继承父类的构造函数
		parent::__construct();
		$this->prot = $port;
		$this->conn = mysql_connect("localhost:$prot", 'root', '123456');
		echo $this->port,'----<br/>';



	}

	public function autoInsert($sql){
		return mysql_query($sql, $this->conn);
	}

}


$mysql = new MysqlEx(3306);  //传入端口3306
var_dump($mysql->autoInsert('USE test'));  //测试是否链接成功 true
echo 'ok';

?>


