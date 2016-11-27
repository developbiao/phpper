<?php
//categroy model
class CateModel extends Model{
	protected $table = 'cate';

	public function add($data){
		return $this->db->autoExecute($this->table, $data, 'insert');
	}

	public function display(){

		return $this->db->getAll('SELECT * FROM '.$this->table);

	}
}
?>