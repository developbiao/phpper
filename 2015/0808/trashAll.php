<?php
/**
 * Describe:Use TrashAll method delete data
 * User: GongBiao
 * Date: 2015/8/8 0008
 * Time: 17:57
 */

require 'rb.php';

R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');

//���ҳ�rating ����ָ����rating����
$books = R::find('book', 'rating > :rating or author=:author', array(':rating' => 7, ':author'=>'xiaofeng'));

echo count($books); //��ӡ�м�������

R::fancyDebug(true);  //��ӡִ��SQL

R::trashAll($books); //ɾ���������



/*
echo '<pre>';
print_r($books);
echo '</pre>';
*/

echo '<h3>Runing is ok!</h3>'

?>

