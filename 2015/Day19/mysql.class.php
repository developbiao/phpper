<?php
/*

mysql类的封装练习

目标：
连接数据库
发送查询
对于select 型 返回查询数据
*/
header('Content-Type:text/html; charset=utf-8');

class Mysql{
	private $host;
	private $user;
	private $pwd;
	private $dbName;
	private $charset;

	private $conn = null; //保存连接的资源


	public function __construct(){
		//应该是在构造方法里面，读取配置文件
		//然后根据配置文件来设置私有属性
		//些处还没有配置文件，就直接赋值

		$this->host = 'localhost';
		$this->user = 'root';
		$this->pwd = '123456';
		$this->dbName = 'test';
		$this->charset = 'utf8';


		//连接
		$this->connect($this->host, $this->user, $this->pwd);

		//切换库
		$this->switchDb($this->dbName);

		//设置字符集
		$this->setChar($this->charset);
	}


	//负责连接
	private function connect($h, $u, $p){
		//echo $h,'->',$u,'->',$p;

		$conn = mysql_connect($h, $u, $p);
		$this->conn = $conn;
	}


	//负责切换数据库,网站大的时候，可能用到不止一个库

	public function switchDb($Dbname){
		$sql = "USE ".$Dbname;
		$this->query($sql);
	}


	//负责设置字符集

	public function setChar($charset){

		$sql = "SET NAMES ".$charset;
		$this->query($sql);
	}


	//负责发送sql查询
	public function query($sql){
		echo '----->' ,$sql,'<br />'; //调试sql语句
		 return mysql_query($sql, $this->conn);
		 //echo 'Execute:',$b,'<br/>';
	}


	//负责获取多行列的selec结果
	public function getAll($sql){
		$list = array();

		$rs = $this->query($sql);
		if(!$rs){
			return false;
		}

		//如果查询到数据
		while($row = mysql_fetch_assoc($rs)){
			$list[] = $row;
		}

		return $list;
	}


	//负责取一行的select结果

	public function getRow($sql){

		$rs = $this->query($sql);

		if(!$rs){ //没有查询到结果
			return false;
		}
		return mysql_fetch_assoc($rs);

	}


	//获取单个值
	public function getOne($sql){
		$rs = $this->query($sql);

		if(!$rs){
			return false;
		}

		$row = mysql_fetch_assoc($rs);
		//print_r($row);
		//echo 'VALUES:',$row[0],'<br />';

		return $row;
	}


	//关闭连接

	public function close(){

		mysql_close($this->conn);

	}

}





?>
