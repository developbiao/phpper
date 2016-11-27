<?php
header('Content-type:text/html; charset-utf-8');
require '../common/PHPExcel/PHPExcel.php';
$dir = dirname(__FILE__);
$objPHPExcel = new PHPExcel(); //实例化PHPExcel对象
$objSheet = $objPHPExcel->getActiveSheet();//获得当前活动的sheet操作对象
$objSheet->setTitle('demo_chunk'); //给当前的sheet设置名称

//准备数组数据
$array = array(
		array(),   //跳过第一行
		array('', '姓名', '分数'), //跳过第A列
		array('', '王聪',  67),
		array('', '李骏', 32)
	);

//直接加载数据块来填充数据
$objSheet->fromArray($array);
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWriter->save($dir . '/demo_from_array.xlsx');

echo '<h3>Program runing is ok!</h3>';


?>
