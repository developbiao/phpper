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

/*
一个栏目A，能修改成为A的子孙栏目的子栏目.
思考：如果B是A的后代，则A不能成为B的子孙栏目
反之，B是A的后代，则A是B的祖靠先

因此，我们为A设定一个新的父栏目时，设为N
我们可以先去查N的 家谱树，N的家谱里，如果有A
则是子孙差辈了
*/



//调用Model来修改

$cat = new CatModel();

//查找找新父类的家谱树
$trees = $cat->getTree($data['parent_id']);

//判断自身是否在新父类的家谱树里面
/*
echo '<h3>你想修改',$cat_id,'栏目</h3>';
echo '<h3>想修改他的新爹为',$data['parent_id'],'</h3>';
echo '<h3>',$data['parent_id'],'栏目的家谱树是</h3>';

echo '<pre>';
print_r($trees);
echo '</pre>';
exit;
*/
$flag = true;
foreach($trees as $v){
	if($v['cat_id'] == $cat_id){ //判断出如果是它的儿孙就标志为false
		$flag = false;
		break;
	}
}

if(!$flag){
	exit('父栏目选取错误!');
}



if($cat->update($data, $cat_id)){
	echo '修改成功';
}else{
	echo '修改失败';
}


?>