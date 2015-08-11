<?php
/*
 * @Description:RrdBean CURD practice
 * @Author:GongBiao
 * @Date;2015/08/08
 */
require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');
R::freeze(true); //�ڱ�ṹȷ�����Ժ�Ϳ���freeze
//Add ����

/*
$book = R::dispense('book');

$book->author = 'gongbiao';
$book->title = 'I Can Fly';
$book->press = 'O\'REILLY';
$book->rating = 3;
$book->date = '2015-8/8';
*/

//=================================================

//Delte ɾ��

//trash or trashAll
/*

$lijun = R::load('book', 5);

R::trash($lijun);
*/


//=================================================

//replace �޸�
/*
$book = R::load('book', 4);
$book->title = 'Time is Life';

echo '<pre>';
print_r($book);
echo '</pre>';


*/

//==================================================


//Query ��ѯ

//1��find();  //����

//$book = R::find('book', ' rating > 4');  //���ص����������
//$books = R::find('book', 'rating < ?', [3]);  //����ʹ�ð�
/*
$books = R::find('book', 'title LIKE ?', ['%Life%']);
foreach($books as $book ){
    echo "<h3>$book->author</h3>";
    echo "<h3>$book->title</h3>";

}
*/

//2�� findOne();  //����һ��
/*
$book = R::findOne('book', 'author LIKE ?', ['gong%']);

echo "<h3>$book->author</h3>";
echo "<h3>$book->title</h3>";
*/

//������ֻ�������ַ�ʽ�ֱ���'?' �� ':bindname'

/*
$book = R::findOne('book', 'author LIKE :name', [':name' => 'gongbiao']);

echo "<h3>$book->author</h3>";
echo "<h3>$book->title</h3>";
*/


//3�� findAll  //����ȫ��

//$books = R::findAll('book', 'ORDER BY author DESC LIMIT 3');
//�󶨲���
/*
$books = R::findAll('book', 'rating <= :rating', ['rating' => 3]);
foreach($books as $book ){
    echo "<h3>$book->author</h3>";
    echo "<h3>$book->title</h3>";
    echo '<hr>';

}
*/

//4�� findLike //Like����
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

//ʹ��ԭʼ��sql��� exec
//1��exec
//INSERT , UPDATE, SELECT
//$count = R::exec('UPDATE book SET author="LiQiangQiang", press="POSTS & TELECOM PRESS", title="Lamp yum", rating="6"');
//$count = R::exec('UPDATE book SET date="2012-9-7" WHERE id=8');
//echo $count;


//2��getAll  ��ȡȫ������
/*
$books = R::getAll('SELECT * FROM book  WHERE rating < :rating', [':rating' => 10]);
foreach($books as $book ){
    echo "<h3>$book[author]</h3>";
    echo "<h3>$book[title]</h3>";
    echo '<hr>';

}
*/





//3��getRow   //��ȡһ������
/*

$row = R::getRow('SELECT * FROM book WHERE title LIKE ? LIMIT 1', array('Team%'));
$row = R::getRow('SELECT * FROM book');  //Ĭ��ȡ��һ��

echo '<pre>';
print_r($row);
echo '</pre>';

*/


//4��getCol //��ȡһ������
/*
$col = R::getCol('SELECT author FROM book');
echo '<pre>';
print_r($col);
echo '</pre>';

*/



//5��getCloumns //��ȡ���ֶ��������͹�������
/*

$column  = R::getColumns('book');

echo '<pre>';
print_r($column);
echo '</pre>';
*/


//6��getAssoc ��ȡ���������ʽ
$books = R::getAssoc('SELECT id, author, title FROM book');
echo '<pre>';
print_r($books);
echo '</pre>';

//R::store($book);

echo '<h3>Ruing is ok!</h3>';

?>