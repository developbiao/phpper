<?php
header('Content-Type:text/html; charset=utf-8');
define('ACC', true);
require('../include/init.php');
//调用model
$cat = new CatModel();
$catlist = $cat->select();

$catlist = $cat->getCatTree($catlist, 0); //目标无限级分类格式化

/*
echo '<pre>';
print_r($catlist);
echo '</pre>';
*/
include(ROOT.'view/admin/templates/catelist.html');

?>