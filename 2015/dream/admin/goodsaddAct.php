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

//自动商品货号2015/07/01
if(empty($data['good_sn'])){
	$data['goods_sn'] = $goods->createSn();
}


if(!$goods->_validate($data)){
	echo '数据不合法<br />';
	echo implode(',', $goods->getErr());
	exit;

}

//2015年6月26日上传图片

$uptool = new UpTool();
$ori_img = $uptool->up('ori_img');

if($ori_img){
	$data['ori_img'] = $ori_img;
}


//如果$ori_img 上传成功，再次生成中等大小缩略图 300 * 400
//根据原始地址 定  中等图的地址
//例:test.jpg -- >goods_test.jpg

if($ori_img){ //如果远程图片存在

	$ori_img = ROOT . $ori_img; //加绝对路径

	$goods_img = dirname($ori_img) . '/goods_' . basename($ori_img);
	//生成中等图
	if(ImageTool::thumb($ori_img, $goods_img, 400, 300)){
		$data['goods_img'] = str_replace(ROOT, '', $goods_img); //去绝对路径
	}


	//再次生成缩略图 160 * 220
	//定好缩略图的地址
	$thumb_img = dirname($ori_img) . '/thumb_' . basename($ori_img);

	//生成缩略图
	if(ImageTool::thumb($ori_img, $thumb_img, 160, 200)){
		$data['thumb_img'] = str_replace(ROOT, '', $thumb_img);
	}

}




/*
echo '<pre>';
print_r($data);
echo '</pre>';
*/
if($goods->add($data)){
	echo '商品发布成功';
}else{
	echo '商品发布失败';
}



?>