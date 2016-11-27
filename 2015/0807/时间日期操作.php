<?php
/*
*@Decribe: practice
*@Author:GongBiao
*@Date:2015/08/07
*/

require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');


//获取时间
//echo R::isoDate();
//echo R::isoDateTime();


//$news = R::dispense('news');
/*
$news->title = 'I Can Fly';
$news->rating = 'very good';
$news->published = '2012-09-14';

R::store($news);
*/

//$news = R::findOne('news', 'title=?', ['I Can Fly']);

/*
echo '<pre>';
//print_r($news);
print_r($news->getProperties());
echo '</pre>';

*/


//practice

$news = R::dispense('news');
echo R::debug(TRUE);
R::trashAll($news);





echo '<h3>Just Ok!</h3>';

//close connet
R::close();
?>
