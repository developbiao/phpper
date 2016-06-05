<?php
header('content-type:text/html; charset=utf-8');

$query_str = 'index.php?username=haah&age=17&hobby=meimei&laolao&teacher=wenjing';
$username = "imooc&gongbiao";
$queryString = 'username=' . urlencode($username) . '&age=17';
echo "<h3>{$query_str}</h3>";

echo "<a href='index.php?{$queryString}'>测试网站url</a>";

if(count($_REQUEST)){
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

}

/*
转义规则
? %3F
= %3F
空格 + 
% %25
& %26
\ %5C
+ %2B
*/

echo '<hr />';

$str = 'ulrencode.php?username=3+5+4%4 learn&imocc # or \1=2';
$url_str = urlencode($str);
echo "<h3>{$url_str}</h3>";

echo '<h3>Program runing is ok!</h3>';
?>