<?php
/*
*@Decribe: practice
*@Author:GongBiao
*@Date:2015/08/07
*/

//Querying 

require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');

R::freeze(TRUE); 
//$records = R::getAll("select * from book");
$book = R::dispense('book');
$var = R::findAll('book', 'author=? or author=?', array('gongbiao', 'Flyme')); 
$book->username = 'shit'; //还是创建了
R::fancyDebug(true);
R::store($book);

//$records = R::findAll('book', "author=? or author_name=?", array("Cai Yuan", "Flyme"));
//R::trashAll($records); 

echo '<h3>Just Ok!</h3>';
?>