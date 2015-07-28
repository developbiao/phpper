<?php
/*
*@Describe:服务器
*@Author:GongBiao
*@Date:2015/07/28
*/
header('Content-Type:text/html; charset=utf-8');
$inAjax = $_GET['inAjax'];
$do = $_GET['do'];
$do = $do ? $do : 'default';

include_once('db.class.php');
if(!$inAjax){
	return false;

}

//出数据库中取数据
$member = array("username", "xiaoqing");
$json = json_encode($member);
switch($do){
	case "checkMember":
	$username = $_GET['username'];
	$sql = "SELECT * FROM person WHERE username='$username'";
	$result = $dbObj->getOne($sql);
	echo (!empty($result)) ? json_encode($result) : 'null';
	break;

	case "default":
	die("nothing");
	break;
	
	case "";
	break;


}

/*
1、连接数据库，进行通信数据读取
2、 把数据库查询返回的对象，转换成Json格式，然后返回给客户端

*/

?>
