<?php
/*
@Decription:文件上传类测试
@Author:GongBiao
@Date:2015/06/26
*/
header('Content-Type:text/html; charset=utf-8');

define('ACC', ture);

require('include/init.php');
require(ROOT . 'tools/UpTool.class.php');

$uptool = new UpTool();
$uptool->setSize(4);
$uptool->setExt('doc'); //追加doc格式
$uptool->setExt('txt'); //追加txt格式

if($res = $uptool->up('pic')){
	echo 'Ok,文件上传成功了呼~';
}else{
	echo '文件上传失败咯!<br />';
	echo $uptool->getError();

}

echo '<h3>程序运行完成!</h3>';

?>