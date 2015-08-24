<?php
/*
*@Decribe: practice
*@Author:GongBiao
*@Date:2015/08/07
*/

//Databas 

require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');

//Relection
//To get all the columns of table 'book'

//获取book表的所有字段
/*
$fileds = R::inspect('book');
echo '<pre>';
print_r($fileds);
echo '</pre>';
*/

//To get all tables;

//获取数据库的所有表
/*
$listOfTables = R::inspect();
echo '<pre>';
print_r($listOfTables);
echo '</pre>';
*/


//To select a database, use the key you have previously specifiled
R::selectDatabase('demo');

$listOfTables = R::inspect();
echo '<pre>';
print_r($listOfTables);
echo '</pre>';




echo '<h3>Just Ok!</h3>';

//close connet
R::close();
?>
