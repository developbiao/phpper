<?php
//栏目编辑Control
define('ACC', true);
require('../include/init.php');
$cat_id = $_GET['cat_id'] + 0;

$cat = new CatModel();
$catinfo = $cat->find($cat_id); //取出要找的一行数据

$catlist = $cat->select(); //取出数据
$catlist = $cat->getCatTree($catlist); //无限级分类

/*
echo '<pre>';
print_r($catlist);
echo '</pre>';
*/

require(ROOT.'view/admin/templates/catedit.html');
?>