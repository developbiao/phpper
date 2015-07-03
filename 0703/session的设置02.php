<?php
/*
@Describe:session
@Author:GongBiao
@Date:2015/07/03
*/
header('Content-Type:text/html; charset=utf-8');

//sestion的销毁

session_start();

$_SESSION['username'] = 'GongBiao';
$_SESSION['hobby'] = 'Programe';


echo session_save_path();
echo '<h3>程序运行完成</h3>';





?>
