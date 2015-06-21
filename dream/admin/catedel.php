<?php
/*
@Description:PHP电子商城练习学习
@Author:GongBiao
@Date:2015/06/21
*/

//栏目的删除

/*
思路：
接收cat_id
调用model
删除cat_id
*/

define('ACC', true);
require('../include/init.php');
$cat_id = $_GET['cat_id'] + 0; //“+0代码健壮性”

$cat = new CatModel();

if($cat->delete($cat_id)){
	echo '删除成功';
}else{
	echo '删除失败';
}



?>