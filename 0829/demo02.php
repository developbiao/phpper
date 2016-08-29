<?php
header('Content-Type:text/html; charset=utf-8');
$hobby = "dance&height=170";
//服务端特殊符号转义urlencode避免了混淆
$hobby = urlencode($hobby);
echo "<h3><a href='process.php?hobby=$hobby'>SHOW YOUR HOBBY!</a></h3>";
?>