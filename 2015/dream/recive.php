<?php
/*
@Describe:支付回调页面
@Author:GongBiao
@Date:2015/07/07
*/
header('Content-Type:text/html; charset=utf-8');

//在线支付的返回信息接收页面

$md5key = '!@cd76dsaf%^&#$(12255';

/*
echo '<pre>';
print_r($_POST);
echo '</pre>';
*/
//计算出md5info
$md5info = md5($_POST['v_oid'] . $_POST['v_pstatus'] . $_POST['v_amount'] . $_POST['v_moneytype'] . $md5key);
$md5info = strtoupper($md5info); //变成大写

//再拿出来的md5info和表单发赤的md5info对比

if($md5info !== $_POST['v_md5str']){
	echo '<h3>支付不成功!</h3>';
	exit;
}

echo '<h3>恭喜你支付成功,您的订单号是:',$_POST['v_oid'],'<h3>';
/*
echo '<h3>执行SQL语句，修改订单状态,', $_POST['v_oid'],'</h3>';

echo '<h3>对应的订单改为支付成功!</h3>';
*/
/*
其它逻辑
*/

?>