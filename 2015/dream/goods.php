<?php
/*
@Describe:商品页面
@Author:GongBiao
@Date:2015/07/04
*/
header('Content-Type:text/html; charset=utf-8');
define('ACC', true);
require('./include/init.php');

$goods_id = isset($_GET['goods_id']) ? $_GET['goods_id'] + 0 : 0;

//查询这个商品信息
$goods = new GoodsModel();
$g = $goods->find($goods_id);

if(empty($g)){
	header('location: index.php');
	exit;
}

$cat = new CatModel();
$nav = $cat->getTree($g['cat_id']);

include(ROOT . 'view/front/shangpin.html');

?>