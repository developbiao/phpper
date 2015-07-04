<?php
/*
@Describe:栏目页面
@Author:GongBiao
@Date:2015/07/04
*/
header('Content-Type:text/html; charset=utf-8');

define('ACC', true);
require('./include/init.php');
//session_start();  //写到了init里面初始化开启session_start();

//接收传过来的栏目ID
$cat_id = isset($_GET['cat_id'])?$_GET['cat_id'] + 0 : 0;

//查找栏目
$cat = new CatModel();
$category = $cat->find($cat_id);


if(empty($category)){
	header('location: index.php');
	exit;
}

//取出树状导航

$cats = $cat->select(); //取出所有栏目

$sort = $cat->getCatTree($cats, 0, 1); //把取出的栏目排序

//取出面包屑导航
$nav = $cat->getTree($cat_id);


//取出栏目下的商品
$goods = new GoodsModel();
$goodlist = $goods->catGoods($cat_id);

/*
echo '<pre>';
print_r($goodlist);
echo '</pre>';
exit;
*/




include(ROOT . 'view/front/lanmu.html');
?>