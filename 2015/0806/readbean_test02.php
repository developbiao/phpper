<?php
//redbean test
require('rb.php');

R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');

//$user = R::dispense('user');

//add filed and value
/*
$user->title = 'GongBiao';
$user->content = 'Hello World Redbean!';
$user->class = 'R1234';
 */


//开始创建
//$id = R::store($user);

//$user = R::load('user', 1);
//$user->title = 'Aliax';

$user = R::findOne('post', 'title=?', array('Alix'));

var_dump($user);



echo $user->title;

echo '<h3>Execute!</h3>';


?>
