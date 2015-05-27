<?php
header("Content-Type:text/html; charset=utf-8");

//heredoc 就像单引号与双引号的区别
$str = <<<TEXT
\t 我想去吃中午饭了，\n我想回家\n
\t感觉天天睡饱
TEXT;

//ETO
$str = <<<'ETO'
床前明月光，
李白想婆娘.
ETO;

echo $str;

?>