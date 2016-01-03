<?php
define('ACC', true);
require('../include/init.php');

$cat = new CatModel();
$catlist = $cat->select();
$catlist = $cat->getCatTree($catlist);
/*
echo '<pre>';
print_r($catlist);
echo '</pre>';
*/

include(ROOT.'view/admin/templates/cateadd.html');
?>