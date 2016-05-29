<?php
require_once "./response.php";
//test xml 输出通信数组方法
$data = array(
	'id' => 999075,
	'name' => 'GongBiao',
	'skill' => array(
		'php' => 5.6,
		'linux' => 5,
		'java' => 4.7
		),
	'type' => array(1, 2, 3),
	'test' => array(1, 45, 89=>array(123, "ahahah"))
	);
echo Response::xmlEncoding(200, 'success', $data);

?>
