<?php
header("Content-Type:text/html; charset=utf-8");

//here doc nowdoc定义大段文本

$str1 = <<<Java
Java Language is Very much!
我的英语太差了，我要学习英语
Java;

$str2 = <<<HTML
<h3>我北京天安门</h3>
HTML;
$str3 = <<<INTRO
远看山有色，
近听水无声。
INTRO;

echo $str1;

echo '<br />';

echo $str2;
echo '<br />';

echo $str3;





?>
