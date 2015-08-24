<?php
/*
*@Decribe: practice
*@Author:GongBiao
*@Date:2015/08/07
*/
require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');
//$book = R::dispense('book'); //create book table object
//R::trash($book); //trash object

/*
$book->password = md5('123456');
$book->author = 'yuanyuan';
$book->content = 'more data';
*/


//R::store($book);

//finding stuff
//$author_a = R::find('book', ' content LIKE ?', ['linux']);
//$author_a = R::load('book', 4);

/*
echo'<pre>';
print_r($author_a);
echo'</pre>';
*/

//echo $author_a->content;


//trash option
//R::trash($author_a); //删除一条数据


//Finding stuff


//$author = R::find('book', ' content LIKE ?', ['this is my book']);

//绑定查找一行
//$author = R::findOne('book', 'content=?', ['Time is Life']);
$author = R::findOne('book', 'author=?', array('gongbiao'));



print_r($author);


R::close();

echo '<h3>Runing is ok!</h3>';
?>
