<?php
header('Content-Type:text/html; charset=utf-8');
/*
*@Describe:对多维数组排序
*@Author:GongBiao
*@Date:2015/08/16
*/

//定义一个学生数组
$students = array(
    256=>array('name'=>'jon','grade'=>98.5),
    2=>array('name'=>'vance','grade'=>85.1),
    9=>array('name'=>'stephen','grade'=>94.0),
    364=>array('name'=>'steve','grade'=>85.1),
    68=>array('name'=>'rob','grade'=>74.6),
);

echo '<h3>排序前：</h3>';
echo '<pre>';
print_r($students);
echo '</pre>';


foreach($students as $key => $row){
	$score[$key] = $row['grade'];
}


//排序
array_multisort($score, SORT_DESC, $students);


echo '<hr />';

echo '<h3>排序后：</h3>';
echo '<pre>';
print_r($students);
echo '</pre>';

?>