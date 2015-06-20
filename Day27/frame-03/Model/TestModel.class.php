<?php
class TestModel{
	protected $table = 'test';
	protected $db = NULL;

	//用户注册的方法
	/*
	$data array();
	*/

	public function __construct(){
		$this->db = mysql::getIns();//db对象就是msyql的实例
	}

	public function reg($data){
		return $this->db->autoExecute($this->table, $data, 'insert');
	}
}
?>