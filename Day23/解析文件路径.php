<?php
/*
*@Description:解析文件路径
*@Author:GongBiao
*@Date:2015/06/15
*/
header('Content-Type:text/html; charset=utf-8');
//解析目录路径
$path = "E:\php0520\day23\index.php";
$file = basename($path);
echo $file;
echo "<br/>";
$file = basename($path, ".php");   
echo $file;

?>
