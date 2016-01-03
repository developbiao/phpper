<?php
header('Content-Type:text/html; charset=utf-8');
session_start();

$username = 'aliax';
$password = '123456';

if($username == 'aliax' && $password=='12345'){
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;

}else{
	header('location:login.php');
}

echo '<pre>';
print_r($_SESSION);
echo '</pre>';


?>
