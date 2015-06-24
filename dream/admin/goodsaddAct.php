<?php
//商品添加校验处理
header('Content-Type:text/html; charset=utf-8');
define('ACC', true);
require('../include/init.php');

//$data['goods_name'] = $_POST['goods_name'];

//数据检验,做一个示例
/*
if($data['goods_name'] == ''){
	echo '商品名不能为空';
	exit;
}

$data['goods_sn'] = trim($_POST['goods_sn']);
$data['cat_id'] = $_POST['cat_id'];
$data['shop_price'] = $_POST['shop_price'] + 0;
$data['market_price'] = $_POST['market_price'];
$data['goods_desc'] = $_POST['goods_desc'];
$data['goods_weight'] = $_POST['goods_weight'] * $_POST['weight_unit'];
$data['is_best'] = isset($_POST['is_best'])?1:0;
$data['is_new'] = isset($_POST['is_new'])?1:0;
$data['is_hot'] = isset($_POST['is_hot'])?1:0;
$data['is_on_sale'] = isset($_POST['is_on_sale'])?1:0;
$data['goods_brief'] = trim($_POST['goods_brief']);

$data['add_time'] = time();
*/
$_POST['goods_weight'] *= $_POST['weight_unit']; //单位换算
$goods = new GoodsModel();

$data = array();
$data = $goods->_facade($_POST); //自动过滤
$data = $goods->_autoFill($data); //自动填充

if(!$goods->_validate($data)){
	echo '数据不合法<br />';
	echo implode(',', $goods->getErr());
	exit;

}

echo '<pre>';
print_r($data);
echo '</pre>';

/*
if($goods->add($data)){
	echo '商品发布成功';
}else{
	echo '商品发布失败';
}
*/



?>