<?php
/*
@Describe:Cookie
@Author:GongBiao
@Date:2015/07/03
*/
header('Content-Type:text/html; charset=utf-8');

/*
cookie的工作流程
由服务器发送给浏览器一个cookie(牌子)
以后再访问时，由浏览器带着cookie(牌子)，服务器检测cookie的信息

设置cookie:setcookie()函数
读取cookie:$_COOKIE[] 超全局数组

问：cookie由浏览器带着的，那么如何被篡改或伪造的
因此:cookie往往用记住用户名，浏览历史，等安全性要求不高的地方

答：可以防范，使用session

*/

setcookie('user', 'aliax');


?>
