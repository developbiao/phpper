<?php
class TestModel extends Model{
	protected $table = 'test';
	//用户注册
	public function reg($data){
		return $this->db->autoExecute($this->table, $data, 'insert');
	}


	//取所有数据

	public function select(){
		return $this->db->getAll('select * from '.$this->table);
	}



}
?>