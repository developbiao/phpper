<?php
header('Content-Type:text/html; charset=utf-8');
$age = array('Peter'=>'35', 'Ben'=>'37', 'Joe'=>'43');
ksort($age);
foreach($age as $key=>$value){
	echo 'Key=' . $key . ', Value='. $value;
	echo '<br />';

}

// ksort根据数据的键对数组排序
echo '<h3>Programe runing is ok!</h3>';
?>
