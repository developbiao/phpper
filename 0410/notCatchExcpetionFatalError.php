<?php
header('Content-Type:text/html; charset=utf-8');
Error_reporting(0);
class Mysql {
	protected $conn = NULL;
	public function __construct(){
		$this->conn = mysql_connect('localhost:3306', 'root', '123486');	
		if(!$this->conn){
			$e = new Exception('连接出错了哈~', 404);
			throw $e;
		}
	}
}



//没有捕获异常会报fatal至命错误
$mysql = new Mysql();
/*
try{

$mysql = new Mysql();
}catch(Exception $e){
	echo '出错了!<br />';
	echo $e.getMessage();
}
*/

echo '<h3>Program runing is ok!</h3>';

