<?php
/*
@Describe:订单与商品对应OGModel
@Author:GongBiao
@Date:2015/07/06
*/
defined('ACC') || exit('ACC Denied');

class OGModel extends Model{
	protected $table = 'ordergoods';
	protected $pk = 'og_id';

	//把订单的商品写入到ordergoods表

	public function addOG($data){

		if($this->add($data)){
			$sql = 'UPDATE goods SET goods_number = goods_number - ' . $data['goods_number'] . ' WHERE goods_id = '. $data['goods_id'];
			return $this->db->query($sql); //减少库存
		}
		return false;
	}

}
?>