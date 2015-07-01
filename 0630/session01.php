<?php
header('Content-Type:text/html; charset=utf-8');
session_start();

$username = 'user1';

$_SESSION['username'] = $username;
$_SESSION['passwd'] = '1333';

echo "欢迎{$_SESSION['username']}login";

session_unset();

//session_destroy();

echo '<br />';
echo session_name();
echo '<br />';
echo session_id();
echo '<br />';
print_r($_SESSION);


?>
