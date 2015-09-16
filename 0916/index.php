<?php
/*
@Describe:重定向测试
*/
//header('Location: http://www.sogou.com'); // 默认的重定向是302临时重定向
header('Location: http://www.sogou.com', true, 301); //永久重定向
?>