<?php
$data = array(
	array('name'=>'xiaoxiao', 'age'=>16),
	array('name'=>'zhuba', 'age'=>14),
	array('name'=>'luha', 'age'=>17)
	);

echo '<pre>';
print_r($data);
echo '</pre>';
echo '<hr/>';
$arr = array();
foreach($data as $ele){
	$ele['psk'] = '1234ABC';
	$arr[] = $ele;
}

echo '<pre>';
print_r($arr);
echo '</pre>';
?>