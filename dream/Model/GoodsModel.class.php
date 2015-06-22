<?php
//GoodsModel商品Model
defined('ACC') || exit('ACC Denied');;

class GoodsModel extends Model{
	protected $table = 'goods';

	/*
	params array $data
	return bool
	*/

	public function add($data){
		return $this->db->autoExecute($this->table, $data);
	}
}


?>