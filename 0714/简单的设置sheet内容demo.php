<?php
header('Content-type:text/html; charset-utf-8');
require '../common/PHPExcel/PHPExcel.php';
$dir = dirname(__FILE__); //找到当前脚本所在路径
$objPHPExcel = new PHPExcel(); //实例化PHPExcel类，等同于在创建一个excel文件
$objSheet = $objPHPExcel->getActiveSheet();//获得当前活动的sheet对象
$objSheet->setTitle('demo'); //给当前活动sheet设置名称

//给当前活动sheet填充数据
$objSheet->setCellValue('A1', '姓名')->setCellValue('B1', '分数');
$objSheet->setCellValue('A2', '张三')->setCellValue('B2', 50);
$objSheet->setCellValue('A3', '王聪')->setCellValue('B3', 70);

//按照指定的格式生成excel文件
$objWrite = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
$objWrite->save($dir . '/demo01.xlsx');

echo '<h3>Program runing is ok!</h3>';


?>
