<?php
header("Content-type:text/html; charset=utf-8");
$fh = fopen('./message.txt', 'a'); //打开文件

//往文件里面写东西
fwrite($fh, 'from php into txt');

//关闭资源
fclose($fh);

echo 'ok';
?>
