<?php 
session_start();
include '../public/common/config.inc.php';

$username=$_POST['username'];
$password=md5($_POST['password']);

$sqlAdmin="select * from admin where username='{$username}' and password='{$password}'";

$rstAdmin=mysql_query($sqlAdmin);

if(mysql_num_rows($rstAdmin)){
	$_SESSION['adminname']=$username;
	$_SESSION['adminlogin']=1;
	
	echo "<script>location='../index.php'</script>";
}else{
	echo "<script>location='login.php'</script>";
}


 ?>