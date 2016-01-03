<?php
//前台注册

define('ACC', true ); //加入常量，允许访问
require('./include/init.php');
$test = new TestModel();
var_dump($test->reg(array('t1'=>'frontuser', 't2'=>'frontuser')));


?>