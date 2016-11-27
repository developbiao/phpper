<?php
/*
@Describe:OIModel
@Author:GongBiao
@Date:2015/07/06
*/

defined('ACC') || exit('ACCDenied');

class OIModel extends Model{
	protected $table = 'orderinfo';
	protected $pk = 'order_id';
	protected $fields = array('order_id','order_sn','user_id','username','zone','address','zipcode','reciver','email','tel','mobile','building','best_time','add_time','order_amount','pay');

	protected $_valid =  array( //自动校验字段
                            array('reciver',1,'收货人不能为空','require'),
                            array('email',1,'email非法','email'),
                            array('pay',1,'必须先支付方式','in','4,5') //代表在线支付与到付.
    ); 

    protected $_auto = array( //自动填充字段
    		array('add_time', 'function', 'time')
    	);


    //生成SN序列号
   	public function orderSn(){
   		$sn = 'OI' . date('Ymd') . mt_rand(10000, 99999); //生成日期加随机SN序列号
   		$sql = 'SELECT COUNT(*) FROM ' . $this->table . ' WHERE order_sn =' . "'$sn'";
   		return $this->db->getOne($sql)?$this->orderSn():$sn; //如果重复调用递归

   	}


   	//操作失败回滚操作

   	public function invoke($order_id){
   		$this->delete($order_id); //先删掉订单

   		$sql = 'DELETE FROM ordergoods WHERE order_id = ' . $order_id; //再删除订单对应的商品

   		return $this->db->query($sql);

   	}




}
?>