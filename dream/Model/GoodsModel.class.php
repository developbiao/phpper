<?php
//GoodsModel商品Model
defined('ACC') || exit('ACC Denied');;

class GoodsModel extends Model{
	protected $table = 'goods';
	protected $pk = 'goods_id';

	/*
	params array $data
	return bool
	*/
	/*
	public function add($data){
		return $this->db->autoExecute($this->table, $data);
	}
	*/

	

	//做标记为删除了
	/*
		作用：把商品放到回收站，即is_delete字段置为1
		params: int id
		return bool
	*/
	public function trash($id){
		return $this->update(array('is_delete'=>1), $id);

	}

	//查询没有被删除的商品
	public function getGoods(){
		$sql = 'SELECT * FROM goods WHERE is_delete=0';
		return $this->db->getAll($sql);

	}

	//查询回收站里面的商品
	public function getTrash(){
		$sql = 'SELECT * FROM goods WHERE is_delete=1';
		return $this->db->getAll($sql);
	}

}


?>