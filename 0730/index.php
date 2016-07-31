<?php
header('Content-Type:text/html; charset=utf-8');
$out = `ipconfig -all`; //列出windows命令
echo $out;
?>

