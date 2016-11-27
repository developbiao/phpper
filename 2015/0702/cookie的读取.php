<?php
//简单的读取cookie没有其它意思
header('Content-Type:text/html; charset=utf-8');
echo '你是', $_COOKIE['username'];
?>
