<?php
header('Content-type:text/html; charset-utf-8');
require '../common/PHPExcel/PHPExcel.php';
$dir = dirname(__FILE__);
$objPHPExcel = new PHPExcel(); //实例化PHPExcel对象
$objSheet = $objPHPExcel->getActiveSheet();//获得当前活动的sheet操作对象
$objSheet->setTitle('demo_chunk'); //给当前的sheet设置名称

//准备数组数据
$array = array(
		array('ID', 'Name', 'Email', 'Describe'),
		array('1', 'Jack', 'javack@gmail.com', 'this is jack'),
		array('2', 'Sime', 'Sime@gmail.com', 'this is sime'),
		array('3', 'Tome', 'Tome@163.com', 'thi is Tome')
	);

//直接加载数据块来填充数据
$objSheet->fromArray($array);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save($dir . '/demo_from_array2.xlsx');

echo '<h3>Program runing is ok!</h3>';


?>