<?php
/*
@Description:回收站功能
@Author:GongBiao
@Date:2015/06/24
*/
define('ACC', true);
require('../include/init.php');

/*
接收goods_id
调用trash方法
*/

if(isset($_GET['act']) && $_GET['act'] == 'show'){
	//这个部分是打印所有的回收商品
	$goods = new GoodsModel();
	$goodslist = $goods->getTrash();

	include(ROOT.'view/admin/templates/goodslist.html');
}else{
	$goods_id = $_GET['goods_id'] + 0;
	$goods = new GoodsModel();

	if($goods->trash($goods_id)){
		echo '已放入回收站';
	}else{
		echo '放入回收站失败';
	}
}
?>