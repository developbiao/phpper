<?php
header('Content-Type:text/html; charset=utf-8');
$arr = array('name'=>'龚彪', 'sex'=>'male', 'hobie'=>'美女老师');
//$arr = array(1,3,5,7,9);

/*
for($i = 0; $i < count($arr); $i++){
	echo $arr[$i];
}
*/

foreach($arr as $key=>$value){
	echo $key,'--',$value;
	echo '<br />';
}

echo '----------------------------------<br />';
foreach ($arr as $value){
	echo $value,'<br />';
}

echo 'ok';
?>
