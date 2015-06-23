<?php
/*
@Descrition:查看商品详细信息
@Author:GongBiao
@Date:2015/06/23
*/
define('ACC', true);
require('../include/init.php');

/*
思路：
接收goods_id
实例化goodsModel
调用find方法
展示商品信息
*/
$goods_id = $_GET['goods_id'];

$goods = new GoodsModel();
$g = $goods->find($goods_id);

if(empty($g)){
	echo '商品不存在';
	exit;
}else{
	echo '<pre>';
	print_r($g); //简单的处理商品详细查看	
	echo '<pre>';
}



?>