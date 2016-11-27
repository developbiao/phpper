<?php
/*
@Describe:首页
@Author:GongBiao
@Date:2015/07/03
*/
header('Content-Type:text/html; charset=utf-8');

define('ACC', true);
require('./include/init.php');


//取出5条新品
$goods = new GoodsModel();
$newlist = $goods->getNew(5);

//取出女士正装商品
$female_id = 4;
$flist = $goods->catGoods($female_id);


//取出男士正装商品
$male_id = 1;

$mlist = $goods->catGoods($male_id);

/*
echo '<pre>';
print_r($mlist);
echo '</pre>';
exit;
*/


include(ROOT . 'view/front/index.html');
?>