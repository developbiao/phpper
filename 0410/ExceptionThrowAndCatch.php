<?php
header('Content-Type:text/html; charset=utf-8');
error_reporting(0);
class Mysql{
	protected $conn = NULL;
	public function __construct(){
		$this->conn = mysql_connect('localhost', 'root', '823456');
		if(!$this->conn){
			$e = new Exception('报告连接不上天宫一号', 9);
			throw $e; //throw抛出/扔出异常
		}
	}	
}


try{//测试，并试图捕捉错误信息
	$mysql = new Mysql(); //返回mysql对象,并自动连接上了数据
	echo '<h3>连接成功！</h3>';
}catch(Exception $e){
	echo '捕捉到了错误信息:<br />';
	echo $e->getMessage(), '<br />';
	echo '错误代码', $e->getCode(),'<br />';
	echo '错误行', $e->getLine(), '<br />';
}
?>
