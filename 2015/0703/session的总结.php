<?php
/*
@Describe:session
@Author:GongBiao
@Date:2015/07/03
*/
header('Content-Type:text/html; charset=utf-8');
/*
一、session的生命周期

我们知道，一个session有2方面的数据共同发挥作用
1:客户端的cookie
2:服务器端的session文件

要想让session失效，也是要从这2个角度来考虑

在php.ini里面，如下选项，控制sessionid的cookie的生命周期,秒有单位
session.cookie_lifetime = 15

注意：如果用户篡改了cookie,让cookie的生命周期为1年,那你也判断不出来

如果想严格的证session就半小时有效，可以这样：
$_SESSION['time'] = 登陆时的时间戳

检验session的开启时间

session.cookie_path = /

session与cookie的存储数据的区别

二、cookie只能存储字符串/数字这样的标题数据
而session还可以存储数组/对象（除了资源型，其它7种都可以）

请注意：如果你把对象存储到session里，
那么另一个读取session的页面，也必须有些对象对应的类声明才合理，
否则，从session里分析出一个对象，却没有与之对应的类，则会提示；

PHP_Incomplete_Class Object


三、从http协议角度看

cookie信息是放　在头信息里传输的

自然，使用cookie之前，不能有任何主体八的输出，空白也不行
　
Warning: session_start() [function.session-start]: Cannot send session cache limiter - headers already sent

如果你仔细检测,没有空白,请检查BOM信息
**




*/


?>
