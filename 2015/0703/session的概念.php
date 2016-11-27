<?php
/*
@Describe:session
@Author:GongBiao
@Date:2015/07/03
*/
header('Content-Type:text/html; charset=utf-8');
/*
思考：对于cookie，相当于蛋糕店的老板给你一张纸
纸上写领取物品：奶酪，蛋糕等
这个纸片在你手里，容易篡改

对于session就像超市是里面的存取柜工作原理，
你买了蛋糕后，老板给你一张收据，上面写了收据的单号：1018
你取物品时，老板打开账本，核对
1018:8寸一份，有记录信息
*/

session_start(); //开始session

$_SESSION['user'] = 'GongBiao';
$_SESSION['email'] = 'developbiao@gmail.com';

echo 'Set Sesstion is ok!<br />';

?>


