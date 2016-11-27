<?php
/*
*@Decribe: practice
*@Author:GongBiao
*@Date:2015/08/07
*/


//简单的获取一些数据
require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');

$books = R::getAll('SELECT * FROM book');

echo '<h2>Test getAll Data....</h2>';

foreach($books as $book){
	echo "<h3>Author:{$book['author']}</h3>";
	echo "<h3>Content:{$book['content']}</h3>";
	echo "<h3>password:{$book['password']}</h3>";

	echo '<hr />';

}


//close connect
R::close();
?>
