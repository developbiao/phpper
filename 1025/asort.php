<?php
header('Content-Type:text/html; charset=utf-8');
$age = array('Peter'=>'35', 'Ben'=>'37', 'Joe'=>'43');
asort($age);
foreach($age as $key=>$value){
	echo 'Key=' . $key . ', Value='. $value;
	echo '<br />';

}

//根据数组的值，对数组进行升序排列

echo '<h3>Programe runing is ok!</h3>';
?>
