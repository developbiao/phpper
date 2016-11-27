<?php
header("Content-Type:text/html; charset=utf-8");

require('./HumanModel.php');
$user = new HumanModel();
$user->t();


/*
如果网站比较大，model类比较多，就需要用到自动加载来解决
*/

//自动加载

function __autoload($c){

	echo '~~~~~',$c,'~~~~~~~~<br />';  //PigModel

}

$tao = new PigModel();



?>
