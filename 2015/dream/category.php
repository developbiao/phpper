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

//接收传过来的页数
$page = isset($_GET['page'])?$_GET['page'] + 0 : 1;
if($page < 1){
	$page = 1;
}

//取出当前栏目下的商品总数
$goodsModel = new GoodsModel();
$total = $goodsModel->catGoodsCount($cat_id); //总条数

//每页显示2个
$perpage = 2;

if($page > ceil($total / $perpage)){ //如果传过来的page数大于计算出来的总页数就让它等于1
	$page = 1;
}

$offset = ($page - 1) * $perpage; //计算偏移值
/*
echo $offset,'<--开始取>',$perpage,'<br />';
exit;
*/

//开始调用分页类
$pagetool = new PageTool($total, $page, $perpage); 
$pagecode = $pagetool->show(); //获取处理后的页码数代码




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
$goodlist = $goods->catGoods($cat_id, $offset, $perpage);

/*
echo '<pre>';
print_r($goodlist);
echo '</pre>';
exit;
*/




include(ROOT . 'view/front/lanmu.html');
?>