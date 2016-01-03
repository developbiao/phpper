<?php
/*
*@Decribe: practice
*@Author:GongBiao
*@Date:2015/08/07
*/

//Querying 

require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');

//use hte SQL query functions provided by RedBeanPHP.
//R:exec('UPDATE news SET rating = "good" WHERE id = 1');


//get All
//$rst = R::getAll('SELECT * FROM book');


//paramter bindings
//参数绑定
/*
$rst = R::getAll('SELECT * FROM book WHERE author=:author', [':author'=>'Flyme']);
$rst = R::getAll('SELECT * FROM book WHERE author=:author', array('author' => 'gongbiao'));
*/


//获取一行
//$row = R::getRow('SELECT * FROM book WHERE content LIKE ? LIMIT 1', ['%linux%']);


//获取一列
//$column = R::getCol('SELECT author FROM book');


//get a single cell...

//$cell = R::getCell('SELECT content FROM book LIMIT 1 ');

echo '<pre>';
print_r($cell);
echo '</pre>';


echo '<h3>Just OK!</h3>';


?>
