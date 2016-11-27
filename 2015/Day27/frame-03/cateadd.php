<?php

define('ACC', true);
require('./include/init.php');
/*
以往的做法是 

接收数据
检验数据

拼凑sql,并执行

判断返回值

现在的MVC开发方式

接收数据
检验数据

把数据交给model去写入数据库

判断model的返回
*/
//目录添加

//接收post数据
$data['catename'] = $_POST['catename'];
$data['intro'] = $_POST['intro'];

//关于名称的检测，如有无重复,以后说

//调用Model
$cateModel = new CateModel();
if($cateModel->add($data)){
	$res = true;
}else{
	$res = false;
}

$list = $cateModel->display();

//模拟把结果展示到view里面
//echo $res?'成功':'失败';
require('./view/cateview.html'); //导入view显示出列表



?>