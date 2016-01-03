<?php
/*
 * @Describe:ReadBeanphp get 与find区别
 * @Author:GongBiao
 * @Date:2015/08/11
 */
require 'rb.php';
R::setup('mysql:host=localhost; dbname=woogi0_1', 'root', '123456');

/*
 * 总结：
 * 1、ReadBean get相关的方法第一个参数是SQL
 * 2、ReadBean 返回的结果的数组
 *
 */
//test getCol
 function getUser_01($id){
    // R::fancyDebug(true);
    $list = R::getCol("SELECT name_en FROM authserver WHERE id=? ", array($id));
    echo '<pre>';
    print_r($list);
    echo '</pre>';

}

//test getRow
function getUser_02($id){
    $list = R::getRow('SELECT * FROM authserver WHERE id=?', array($id));
    echo '<pre>';
    print_r($list);
    echo '</pre>';

}

//test getAssoc
function getUser(){
    $list = R::getAssoc('SELECT name_en, name_cn FROM authserver');
    echo '<pre>';
    print_r($list);
    echo '</pre>';

}

//test getAll
//这个获取获取的是多维数组
function getAllUser(){
$list = R::getAll('SELECT name_en, name_cn FROM authserver');
echo '<pre>';
print_r($list);
echo '</pre>';
}



//=======================================
/*
 * find总结：
 * 参数：表名   条件  绑定
 */

//find One
function findUser_01($id){
    $list = R::findOne('authserver', 'id=?', array($id));
    echo '<pre>';
    print_r($list);
    echo '</pre>';

}

//find last
function findUser_02(){
    $list = R::findLast('authserver'); //查找最后一行
    echo '<pre>';
    print_r($list);
    echo '</pre>';
}

//find all
function findUser_03(){
    //ORDER BY author DESC LIMIT 3
    //findAll('authserver');
    $list =R::findAll('authserver','ORDER BY name_en DESC LIMIT 1');  //findAll没有第三个绑定参数
    echo '<pre>';
    print_r($list);
    echo '</pre>';

}



//findLike
function findUser04(){
    $list = R::findLike('authserver',array('name_en'=>array('Internal, China', 'Seattle, US', 'BeiJing2, China')), 'ORDER BY name_en DESC');
    foreach($list as $u ){
        echo "<h3>$u->name_en</h3>";
        echo "<h3>$u->ip</h3>";
        echo '<hr>';

    }

}

//findMutil
function getMutil(){
    $rst = R::findMulti('authserver, authuser', 'SELECT authserver.*, authuser.* FROM authserver INNER JOIN authserver.id=authuser.id
WHERE authserver.id = ?', [8]);
    foreach($rst as $u ){
        echo "<h3>$u->name_en</h3>";
        echo "<h3>$u->ip</h3>";
        echo '<hr>';

    }
}

getMutil();
echo '<h3>Runing is ok!</h3>';

?>