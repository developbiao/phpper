<?php
/*
php中的异常处理机制
*/
header("Content-Type:text/html; charset=utf-8");

//Error_reporting(0); //屏蔽warning错误
class mysql{
	protected $conn = NULL;

	public function __construct(){
		$this->conn = @mysql_connect('localhost', 'root', '123456');

		if(!$this->conn){
			$e = new Exception('用户名或密码不正确', 7); //声明异常
			throw $e; //抛出抛出异常
		}
	}
}


try{ //测试，并试图捕捉错误信息


$mysql = new mysql();
var_dump($mysql);

}catch(Exception $e){

	echo '捕捉到错误信息:<br />';
	echo $e->getMessage(),'<br />';
	echo '错误代码',$e->getCode(),'<br />';
	echo '错误文件',$e->getFile(),'<br />';
	echo '错误行',$e->getLine(),'<br />';

}

?>