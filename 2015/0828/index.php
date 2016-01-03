<?php
require 'rb.php';
R::setup('mysql:host=localhost; dbname=woogi0_1', 'root', '123456');
//test getCol
 function getUser_01($id){
    // R::fancyDebug(true);
    $list = R::getCol("SELECT number FROM wcrestaurant WHERE id=? ", array($id));
    /*
    echo '<pre>';
    print_r($list);
    echo '</pre>';
    */
    echo $list[0];

}

getUser_01(2);

echo '<h3>Programe runing is ok!</h3>';

?>