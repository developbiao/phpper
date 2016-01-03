<?php
//赋值：<body text='back'>
//$bodytag = str_replace("%body%", "black","<body text='%body%'>");
//echo $bodytag;
//Examp01
//$var = str_replace("Hello", "Hey", "Hello world");
//echo $var;

//例子02
/*
$arr = array('blue', 'red', 'green', 'yellow');
echo "<pre>";
print_r(str_replace('red', 'pink', $arr,$i));
echo "</pre>";
echo "Replacemens:$i";
*/

$find = array('Hello', 'World');
$replace = array('XXX');
$arr = array('Hello', "World", "!");
$result = array(str_replace($find, $replace,$arr));
echo "<pre>";
print_r($result);
echo "</pre>";

echo "<hr />";
// 赋值: <body text='black'>
$bodytag = str_replace("%body%", "black", "<body text='%body%'>");
echo $bodytag;
?>