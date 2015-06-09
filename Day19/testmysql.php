<?php
header('Content-Type:text/html;charset=utf-8');
include_once('./mysql.class.php');  //引入mysql操作类

$mysql = new Mysql();

//print_r($mysql);

//查询多行数据

/*
$sql = "INSERT INTO stu VALUES(4, 'smile', 21)";
if($mysql->query($sql)){
	echo 'query Succefull!';
}else{
	echo '失败!';
}
*/


//查询3号学生
//$sql = 'SELECT * FROM stu WHERE id=3'; 


//print_r($mysql->getRow($sql));


//查询一总多少个学生
/*
$sql = 'SELECT COUNT(*) FROM stu';
print_r($mysql->getOne($sql));
*/


//查询所有学生

$sql = 'SELECT * FROM stu';
echo '<pre>';
print_r($mysql->getAll($sql));
echo '</pre>';

//关闭连接
//$mysql->close();



/*
echo '<pre>';
print_r($list);
echo '</pre>';
*/



?>