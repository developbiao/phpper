<?php
header('Content-Type:text/html; charset=utf-8');
$text = ' Sjun ';
$text[10] = 'S13'; //[S, j, u, n, 4, 5, 6, 7, 8, 9, S]
//[0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10]
//[' ', 'S', 'j', 'u', 'n', ' ', ' ', ' ', ' ', ' ', ' ']
var_dump($text);
//虽然刚开始只有6个字符,但是php会默认填充空格
//实际输出结果：string(11) " Sjun S" 
echo '<h3>Program runing is ok!</h3>';
?>
