<?php
require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');
$book = R::dispense('book');
$book->author='XiaoQiang';
$book->content='Time is Life';
$id =R::store($book); //save to database

echo $id;
?>
