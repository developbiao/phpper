<?php
/*
mysql数据库类继承于db类
*/
defined('ACC') || exit('ACC Denied!');

class mysql extends db{
	private static $ins = NULL;
	private $conn = NULL;
	private $conf = array();

	//初始化

	protected function __construct(){
		$this->conf = conf::getIns();

		$this->connect($this->conf->host, $this->conf->user, $this->conf->pwd);
		$this->select_db($this->conf->db);
		$this->setChar($this->conf->char);
	}

	public function __destruct(){

	}


	//获取对象单例
	public function getIns(){
		if(!(self::$ins instanceof self)){
			self::$ins = new self();
		}

		return self::$ins;
	}


	//连接服务器
	public function connect($h, $u, $p){
		$this->conn = mysql_connect($h, $u, $p);
		if(!$this->conn){
			$err = new Exception('连接失败');
			throw $err;
		}
	}	

	//选择字符集

	public function setChar($char){
		$sql = 'set names '.$char;

		$this->query($sql);
	}

	//选择数据库

	public function select_db($db){
		$sql = 'USE '. $db;
		$this->query($sql);

	}

	//查询query

	public function query($sql){
		$rs = mysql_query($sql);
		log::write(date('Y-m-d H:i:s', time()).'--->'.$sql); //记录日志

		return $rs;

	}

	//查询多行数据
	public function getAll($sql){

		$rs = $this->query($sql);

		$list = array();

		while($row = mysql_fetch_assoc($rs)){
			$list[] = $row;
		}

		return $list;


	}

	//查询单行数据

	public function getRow($sql){
		$rs = $this->query($sql);
		return $row = mysql_fetch_assoc($rs);
	}

	//查询单个数据

	public function getOne($sql){
		$rs = $this->query($sql);
		$row = mysql_fetch_row($rs);
		return $row[0];

	}


	//自动执行语句

	public function autoExecute($table, $arr, $mode='insert', $where='1 limit 1'){

		if(!is_array($arr)){
			return false;
		}

		if($mode=='update'){
			$sql = 'update ' . $table. ' set ';
			foreach($arr as $k=>$v){
				$sql .= $k . "='" . $v . "',";
			}
			$sql = rtrim($sql, ',');
			$sql .= $where;
			return $this->query($sql);
		}


		$sql = 'insert into ' . $table . '('. implode(',', array_keys($arr)) . ')';
		$sql .= ' value (\'';
		$sql .= implode("','", array_values($arr));
		$sql .= '\')';

		return $this->query($sql);

	}


	//返回影响行数
	public function affected_rows(){
		return mysql_affected_rows($this->conn);
	}

	//返回最新的auto_increment列的自动增长的值
	public function insert_id(){
		return mysql_insert_id($this->conn);
	}

}
?>