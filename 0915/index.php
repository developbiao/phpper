<?php
header('Content-Type:text/html; charset=utf-8');
$onobj_position = array( //on objcet坐标
			array('x'=>1, 'y'=>2, 'z'=>4, 'obj_type'=>2, 'obj_id'=>1),
			array('x'=>2, 'y'=>3, 'z'=>8, 'obj_type'=>3, 'obj_id'=>4),
			array('x'=>3, 'y'=>5, 'z'=>1, 'obj_type'=>4, 'obj_id'=>2),
			array('x'=>4, 'y'=>7, 'z'=>7, 'obj_type'=>5, 'obj_id'=>5)
	);

$release_position = array( //objcet 释放坐标
			array('next_x'=>4, 'next_y'=>5, 'next_z'=>6),
			array('next_x'=>1, 'next_y'=>5, 'next_z'=>7),
			array('next_x'=>5, 'next_y'=>9, 'next_z'=>8),
			array('next_x'=>3, 'next_y'=>7, 'next_z'=>2)
	);

$current_position = array('x'=>3, 'y'=>8, 'z'=>9, 'flag'=>0); //初始化的出生坐标

if($current_position['flag'] == 0){
	$current_position['x'] = rand
}

echo '<pre>';
print_r($current_position);
echo '</pre>';
exit;

$rand_index = rand(0, count($onobj_position) - 1); 




//随机取下标




echo '<h3>start坐标:</h3>';
echo '<pre>';
print_r($onobj_position[$rand_index]);
echo '</pre>';

echo '<hr />';
echo '<h3>释放坐标</h3>';
echo '<pre>';
print_r($release_position[$rand_index]);
echo '</pre>';

echo '<h3>Program runing is ok!</h3>';
?>