<?php
header('Content-type:text/html; charset-utf-8');
try{
	//$pdo = new PDO("mysql:host=localhost;dbname=woogi0_1","root","123456");
	// 读取文件配置的方式
	$pdo = new PDO("uri:mysql_pdo.ini", "root", "123456");
	$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT, 0);
}catch(PDOException $e){

 die("database connnect failed!" . $e->getMessage());
}
//print_r($pdo->getAttribute(PDO::ATTR_SERVER_INFO));


print_r($pdo->getAttribute(PDO::ATTR_AUTOCOMMIT));
?>