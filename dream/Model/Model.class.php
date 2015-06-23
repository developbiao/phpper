<?php
defined('ACC') || exit('ACC Denied!');
//父类model
class Model{
	protected $table = NULL; //是model所控制的表
	protected $db = NULL; //是引入的mmysql对象

	protected $pk = '';

	public function __construct(){
		$this->db = mysql::getIns();
	}

	public function table($table){
		$this->table = $table;
	}

	/*
	在父类里，写最基本的增、删、改查操作
	*/

	/*
	增加操作
	params array $data
	return bool
	*/

	public function add($data){
		return $this->db->autoExecute($this->table, $data);

	}

	/*
	删除操作
	params int $id 主键
	return int影响行数
	*/

	public function delete($id){
		$sql = 'DELETE FROM '. $this->table . ' WHERE' . $this->pk . '=' . $id;
		if($this->db->query($sql)){
			return $this->db->affected_rows();
		}else{
			return false;
		}

	}

	/*
	修改操作
	params array $arr
	params int $id
	return int 影响行数
	*/

	public function update($data, $id){

		$rs = $this->db->autoExecute($this->table, 'update', ' where '. $this->pk . '=' . $id);
		if($rs){
			return $this->affected_rows();
		}else{
			return false;
		}

	}

	/*
	查询所有的数据
	params void
	return Array $arr
	*/

	public function select(){
		$sql = 'SELECT * FROM ' . $this->table;
		return $this->db->getAll($sql);
	}


	/*
	查找一行数据
	params $id
	return Array
	*/

	public function find($id){
		$sql = 'SELECT * FROM '. $this->table . ' WHERE ' . $this->pk . '=' . $id;
		return $this->db->getRow($sql);
	}


}

?>
