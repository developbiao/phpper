<?php
/*
file cateaddAct.php
作用 接收cateadd.php表单页面发送来的数据
并调用model把数据存入数据库

*/

define('ACC', ture);
require('../include/init.php');

//第一步，接数据
/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/

//第二步，检验数据
$data = array();
if(empty($_POST['cat_name'])){
	exit('栏目名不能为空');	
}
$data['cat_name'] = $_POST['cat_name'];

//同理判断intro及父栏目id是否合法

$data['parent_id'] = $_POST['parent_id'];
$data['intro'] = $_POST['intro'];


//第三眇，实例化model
//并调用model类相关方法

$cat = new CatModel();

if($cat->add($data)){
	echo '栏目添加成功';
}else{
	echo '栏目添加失败';
	exit;
}



?>