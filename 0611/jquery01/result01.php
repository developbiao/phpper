<?php
header('Content-Type:text/html; harset=utf-8');
$username = isset($_REQUEST['name']) ? $_REQUEST['name'] : 'Unkonw';
echo 'WelCome '. $username;
?>