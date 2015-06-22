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

/*
判断该栏目是否有子栏目
如果有子栏目，则该栏目不允许删除

思路：
无限级分类有3个基本应用
1：查子栏目
2：查子孙栏目
3：查家谱树

我们可以在model写一个方法，专门查子栏目
*/



$cat = new CatModel();

$sons = $cat->getSon($cat_id); //判断有没有子栏目，有子栏目不允许删除
if(!empty($sons)){
	exit('有子栏目，不允许删除');
}

if($cat->delete($cat_id)){
	echo '删除成功';
}else{
	echo '删除失败';
}



?>