<?php
//父类model
class Model{
	protected $table = NULL; //是model所控制的表
	protected $db = NULL; //是引入的mmysql对象

	public function __construct(){
		$this->db = mysql::getIns();
	}

	public function table($table){
		$this->table = $table;
	}
}

?>