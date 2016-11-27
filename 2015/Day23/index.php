<?
/***
所有由用户直接访问的这些页面

都得先加载 init.php
***/
header('Content-Type:text/html;charset=utf-8');

require('./include/init.php');

$conf = conf::getIns();

/*
echo '<pre>';
print_r($conf);
echo '</pre>';

echo '---------------------获取属性-------------------<br />';
echo '主机是:',$conf->host,'<br />';
echo '用户名是:',$conf->user,'<br />';


echo '----------------------设置属性------------------<br />';
$conf->email = 'developbiao@biao.com';

echo '<pre>';
print_r($conf);
echo '</pre>';

echo '<br />';
var_dump($conf->template_dir);

$conf->template_dir = 'c:/windows/system32<br />';

$conf->phone = '18828077952';
echo $conf->phone;

echo $conf->template_dir;


echo 'ok<br />';
*/



?>