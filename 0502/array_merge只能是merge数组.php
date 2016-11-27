<?php
header('Content-Type:text/html; charset=utf-8');
//下面的代码有什么问题吗？输出会是什么，怎样修复它
$referenceTable = array();
$referenceTable['val1'] = array(1, 2);
//$referenceTable['val2'] = 3;
$referenceTable['val2'] = array(3); // 修复方法
$referenceTable['val3'] = array(4, 5);

$testArray = array();

$testArray = array_merge($testArray, $referenceTable['val1']);
var_dump($testArray);
echo '<hr />';
$testArray = array_merge($testArray, $referenceTable['val2']);
echo '<hr />';
$testArray = array_merge($testArray, $referenceTable['val3']);
var_dump($testArray);
echo '<h3>Program runing is ok!</h3>';
?>
