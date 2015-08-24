<?php
/*
*@Decribe: practice
*@Author:GongBiao
*@Date:2015/08/07
*/

//Querying 

require 'rb.php';
R::setup('mysql:host=localhost; dbname=demo', 'root', '123456');
$language = R::dispense('language');
R::fancyDebug(true);
$language->city = 'AM';
$language->people = 'blank';
R::store($language);



echo '<h3>Fancy Test</h3>';
?>
