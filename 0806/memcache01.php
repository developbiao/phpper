<?php
/*
 * @Describe:memecached learn
 * @Author:GongBiao
 */
$memcache = new Memcache();
$memcache->connect('127.0.0.1', 11211);

//set
$memcache->set('hobby', 'qiezi');

//delete
$memcache->delete('hobby');

//add
$memcache->add('name', 'gongbiao');

//add news
$memcache->add('news', 'sohu news bbc news!', 2, 30);

//repalce
$memcache->replace('name', 'aliax');

echo $memcache->get('news');
echo "\n";

$memcache->close();   //close connect

?>