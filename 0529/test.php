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
//echo Response::xmlEncoding(200, 'success', $data);

//接收客户端指定需要的格式
$type = isset($_GET['format']) ? $_GET['format'] : Response::JSON;


Response::show(200, 'success', $data, $type);

echo '<h3>Program runing is ok!</h3>';

?>