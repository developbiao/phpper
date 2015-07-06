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

}else if($act == 'done'){
/*
订单入库，最重要的一个环节

1、从表彰读取 送货地址、手机等信息
2、从购物车读取总价格信息
3、写入orderinfo表
*/


$OI = new OIModel();
if(!$OI->_validate($_POST)){ //检查数据通没有通过，报错退出
	$msg = implode(',', $OI->getErr());

	include(ROOT . 'view/front/msg.html');
	exit;

}


//自动过滤

$data = $OI->_facade($_POST);



//自动填充
$data = $OI->_autoFill($data);
/*
echo '<pre>';
print_r($data);
echo '</pre>';
exit;
*/


//写入总金额
$total = $data['order_amount'] = $cart->getPrice();

//写入用户名，从session读取

$data['user_id']  = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;
$data['username'] = isset($_SESSION['username']) ? $_SESSION['username'] : '匿名';


//写入订单号
$order_sn = $data['order_sn'] = $OI->orderSn();



if(!$OI->add($data)){
	$msg = '下订单失败!';
	include(ROOT . 'view/front/msg.html');
	exit;
}

//获取刚刚产生的order_id的值

$order_id = $OI->insert_id();


/*
要把订单的商品写入数据库
1个订单对应N个商品，循环写入到ordergoods表
*/

$items = $cart->all();  //返回订单中的所有的商品
$cnt = 0; //cnt用来记录插入ordergoods成功的次数

$OG = new OGModel(); //获取ordergoods的操作model

foreach($items as $k=>$v){
	$data = array();
	$data['order_sn'] = $order_sn;
	$data['order_id'] = $order_id;
	$data['goods_id'] = $k;
	$data['goods_name'] = $v['name'];
	$data['goods_number'] = $v['num'];
	$data['shop_price'] = $v['price'];
	$data['subtotal'] = $v['price']*$v['num'];

	if($OG->addOG($data)) {
            $cnt += 1;  // 插入一条og成功,$cnt+1.
            // 因为,1个订单有N条商品,必须N条商品,都插入成功,才算订单插入成功!
        }

}


if(count($items) !== $cnt){ //购物车里的商品数量，并没有全部写入成功
	//撤消此订单
	$OI->invoke($order_id);
	$msg = '下订单失败';
	include(ROOT . 'view/front/msg.html');
	exit;

}



//下订单成功，清空购物车

$cart->clear();


include(ROOT . 'view/front/order.html');


/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/
}
?>