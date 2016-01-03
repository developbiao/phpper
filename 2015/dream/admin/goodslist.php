<?php
/*
@Description:商品展示页
@Author:GongBiao
@Date:2015/06/23
*/

define('ACC', true);
require('../include/init.php');

/*
思路：
实例化GoodsModel
调用select 方法
循环显示在view上
*/
$goods = new GoodsModel();
$goodslist = $goods->getGoods();

require(ROOT . 'view/admin/templates/goodslist.html');


?>