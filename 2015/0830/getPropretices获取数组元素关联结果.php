<?php
header('Content-Type:text/html; charset=utf-8');
require_once('rb.php');
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');
//$book = R::dispense('book');

$record = R::findOne('book', 'id=?' , array(3));


$list = $record->getProperties();
echo '<pre>';
print_r($list);
echo '</pre>';

echo '<h3>Programe runing is ok!</h3>';
?>
