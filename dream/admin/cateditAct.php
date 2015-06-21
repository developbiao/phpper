<?php
//检查update的合法性

define('ACC', ture);
require('../include/init.php');

//接POST
//判断合法性

$data = array();
$data['cat_name'] = $_POST['cat_name'];
$data['intro'] = $_POST['intro'];
$data['parent_id'] = $_POST['parent_id'];

$cat_id = $_POST['cat_id'] + 0;

//调用Model来修改

$cat = new CatModel();
/*
echo '<pre>';
print_r($data);
echo '</pre>';
*/

if($cat->update($data, $cat_id)){
	echo '修改成功';
}else{
	echo '修改失败';
}


?>