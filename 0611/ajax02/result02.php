<?php
header('Content-Type:text/html; charset=utf-8');
$array = array();
$array['cmd'] = 'Post.result';
if($_POST['username']){
	$array['username'] = $_POST['username'];
}
if($_POST['hobby']){
	$array['hobby'] = $_POST['hobby'];
}

echo json_encode($array);

?>