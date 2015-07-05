<?php
/*
@Dscribe:购物流程页面商城的核心功能
@Author:GongBiao
@Date:2015/07/05
*/
header('Content-Type:text/html; charset=utf-8');
define('ACC', true);
require('./include/init.php');

//设置一个动作参数，判断用户想干什么，比如是下订单/写地址/提交/清空购物车等
$act = isset($_GET['act']) ? $_GET['act'] : 'buy';

$cart = CartTool::getCart(); //获取购物车实例
$goods = new GoodsModel();

if($act == 'buy'){ //把商品放入购物车
	$goods_id = isset($_GET['goods_id']) ? $_GET['goods_id'] + 0 : 0;
	$num = isset($_GET['num']) ? $_GET['num'] + 0 : 1;


	if($goods_id){ //$goods_id为真，是想把商品入到购物车里
		$g = $goods->find($goods_id);
		if(!empty($g)){ //说明有商品

			//需要判断此商品，是否在回收站
			//此商品是否下架
			if($g['is_delete'] == 1 || $g['is_on_sale'] == 0){
				$msg = '此商品不能购买';
				include(ROOT . 'view/front/msg.html');
				exit;
			}

			//先把商品添加到购物车

			$cart->addItem($goods_id, $g['goods_name'], $g['shop_price'], $num);

			//判断库存够不够
			$items = $cart->all();

			if($items[$goods_id]['num'] > $g['goods_number']){
				//库存不足,把刚才添加到购物车的商品撤回
				$cart->decNum($goods_id, $num);
				$msg = '库存不足';

				include(ROOT . 'view/front/msg.html');
				exit;

			}

		}
	}

	$items = $cart->all();

	if(empty($items)){ //如果购物车为空，返回到首页
		header('location: index.php');
		exit;

	}


	//把购物车里的商品详细信息取出来，包括市场价，缩略图
	$items = $goods->getCartGoods($items);

	$total = $cart->getPrice(); //计算购物四中的商品总价格
	$market_total = 0.0;
	foreach($items as $v){ //计算市场总价
		$market_total += $v['market_price'] * $v['num'];
	}

	$discount = $market_total - $total; //计算差价
	$rate = round(100 * $discount / $total, 2); //节省计算百分比


	include(ROOT . 'view/front/jiesuan.html');

}else if($act == 'clear'){
	$cart->clear(); //清空购物车
	$msg = '购物车已清空!';
	include(ROOT . 'view/front/msg.html');
	exit;

}else if($act == 'tijiao'){
	$items = $cart->all();
	$items = $goods->getCartGoods($items);

	$total = $cart->getPrice(); //计算购物四中的商品总价格
	$market_total = 0.0;
	foreach($items as $v){ //计算市场总价
		$market_total += $v['market_price'] * $v['num'];
	}

	$discount = $market_total - $total; //计算差价
	$rate = round(100 * $discount / $total, 2); //节省计算百分比
	
	include(ROOT . 'view/front/tijiao.html');
}
/*
echo '<pre>';
print_r($items);
echo '</pre>';
*/
?>