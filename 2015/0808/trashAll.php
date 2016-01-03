<?php
/**
 * Describe:Use TrashAll method delete data
 * User: GongBiao
 * Date: 2015/8/8 0008
 * Time: 17:57
 */

require 'rb.php';

R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');

//查找出rating 大于指定的rating的书
$books = R::find('book', 'rating > :rating or author=:author', array(':rating' => 7, ':author'=>'xiaofeng'));

echo count($books); //打印有几个对象

R::fancyDebug(true);  //打印执行SQL

R::trashAll($books); //删除多个对象



/*
echo '<pre>';
print_r($books);
echo '</pre>';
*/

echo '<h3>Runing is ok!</h3>'

?>

