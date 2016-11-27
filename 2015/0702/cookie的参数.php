<?php
/*
@Describe:Cookie
@Author:GongBiao
@Date:2015/07/02
*/
header('Content-Type:text/html; charset=utf-8');

setcookie('name', 'chengli');

/*
setcookie()方法学习

setcookie()可以用2个参数,3个参数，4个参数,5个参数来设置

3个参数来设置cookie,第三个参数是指cookie的生命周期，以时间戳为单位
关掉浏览器后，就对比出效果, name关掉浏览器就失效
而school能存活1小时
*/

setcookie('school', 'MBA', time() + 3600);

/*
cookie的作用域
一个页面设置的cookie
默认在其同级目录下，及子上当下可以读取
如果想证cookie整个站有效，可以在要目录下setcookie

也可以用第4个参数，来指定cookie生效路径
*/

setcookie('gloabl', 'any where', time() + 3600, '/');

/*
cookie 是不能够跨域名（否则安全问题就太在了）
比旭sohu.com的cookie，不能被 发到sina.com用
但，可以在一个域名的子域名下使用
需要第5个参数来表示
例：
setcookie('key', 'value', time + 3600, '/', 'sina.com.cn')
这个cookie在book.sina.com.cn可以使用
在xxx.sina.com也可以使用
*/

echo '<h3>设置成功</h3>';

?>
