<?php
header('Content-Type:text/html; charset=utf-8');
require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');
R::freeze();

//$goods = R::find('goods', 'goods_id = 3');
$goods = R::findAll('goods', 'ORDER BY goods_id DESC');

echo '<pre>';
print_r($goods);
echo '</pre>';


?>