<?php
/*
*@Decribe: practice
*@Author:GongBiao
*@Date:2015/08/07
*/

require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');

$book = R::dispense('book');

//upate
/*
$author = R::load('book', 7);
$author->author = 'LiZhengDaiQi';

R::store($author);
*/

//insert new data

$book->author = 'Flyme';
$book->content = 'I Can Fly';

$book->password = md5('782133');

//save

R::store($book);

echo '<h3>Just ok!</h3>';

//close connet
R::close();
?>
