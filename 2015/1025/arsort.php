<?php
header('Content-Type:text/html; charset=utf-8');
$age = array('Peter'=>'35', 'Ben'=>'37', 'Joe'=>'43');
arsort($age);
foreach($age as $key=>$value){
	echo 'Key=' . $key . ', Value='. $value;
	echo '<br />';

}

// 根据数据对的值数的值，对关联数组进行降序排序
echo '<h3>Programe runing is ok!</h3>';
?>
