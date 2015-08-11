<?php
/*
 * @Description:RrdBean CURD practice
 * @Author:GongBiao
 * @Date;2015/08/08
 */
require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');
R::freeze(true); //在表结构确定了以后就可以freeze
//Add 增加

/*
$book = R::dispense('book');

$book->author = 'gongbiao';
$book->title = 'I Can Fly';
$book->press = 'O\'REILLY';
$book->rating = 3;
$book->date = '2015-8/8';
*/

//=================================================

//Delte 删除

//trash or trashAll
/*

$lijun = R::load('book', 5);

R::trash($lijun);
*/


//=================================================

//replace 修改
/*
$book = R::load('book', 4);
$book->title = 'Time is Life';

echo '<pre>';
print_r($book);
echo '</pre>';


*/

//==================================================


//Query 查询

//1、find();  //查找

//$book = R::find('book', ' rating > 4');  //返回的是数组对象
//$books = R::find('book', 'rating < ?', [3]);  //可以使用绑定
/*
$books = R::find('book', 'title LIKE ?', ['%Life%']);
foreach($books as $book ){
    echo "<h3>$book->author</h3>";
    echo "<h3>$book->title</h3>";

}
*/

//2、 findOne();  //查找一行
/*
$book = R::findOne('book', 'author LIKE ?', ['gong%']);

echo "<h3>$book->author</h3>";
echo "<h3>$book->title</h3>";
*/

//参数绑定只可有两种方式分别是'?' 和 ':bindname'

/*
$book = R::findOne('book', 'author LIKE :name', [':name' => 'gongbiao']);

echo "<h3>$book->author</h3>";
echo "<h3>$book->title</h3>";
*/


//3、 findAll  //查找全部

//$books = R::findAll('book', 'ORDER BY author DESC LIMIT 3');
//绑定参数
/*
$books = R::findAll('book', 'rating <= :rating', ['rating' => 3]);
foreach($books as $book ){
    echo "<h3>$book->author</h3>";
    echo "<h3>$book->title</h3>";
    echo '<hr>';

}
*/

//4、 findLike //Like查找
/*
$books = R::findLike('book', array('author'=>array('gongbiao', 'xiaoqiang', 'Lijun')), 'ORDER BY author DESC');
foreach($books as $book ){
    echo "<h3>$book->author</h3>";
    echo "<h3>$book->title</h3>";
    echo '<hr>';

}
*/
//=====================================================

//Querying

//使用原始的sql语句 exec
//1、exec
//INSERT , UPDATE, SELECT
//$count = R::exec('UPDATE book SET author="LiQiangQiang", press="POSTS & TELECOM PRESS", title="Lamp yum", rating="6"');
//$count = R::exec('UPDATE book SET date="2012-9-7" WHERE id=8');
//echo $count;


//2、getAll  获取全部数据
/*
$books = R::getAll('SELECT * FROM book  WHERE rating < :rating', [':rating' => 10]);
foreach($books as $book ){
    echo "<h3>$book[author]</h3>";
    echo "<h3>$book[title]</h3>";
    echo '<hr>';

}
*/





//3、getRow   //获取一行数据
/*

$row = R::getRow('SELECT * FROM book WHERE title LIKE ? LIMIT 1', array('Team%'));
$row = R::getRow('SELECT * FROM book');  //默认取第一行

echo '<pre>';
print_r($row);
echo '</pre>';

*/


//4、getCol //获取一列数据
/*
$col = R::getCol('SELECT author FROM book');
echo '<pre>';
print_r($col);
echo '</pre>';

*/



//5、getCloumns //获取表字段名和类型关联数组
/*

$column  = R::getColumns('book');

echo '<pre>';
print_r($column);
echo '</pre>';
*/


//6、getAssoc 获取关联数组格式
$books = R::getAssoc('SELECT id, author, title FROM book');
echo '<pre>';
print_r($books);
echo '</pre>';

//R::store($book);

echo '<h3>Ruing is ok!</h3>';

?>