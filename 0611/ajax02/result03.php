<?php
header('Content-Type:text/html; charset=utf-8');
function sendBack()
{
	$array = array();
	$array['cmd'] = 'Result.ajax';
	$array['username'] = isset($_REQUEST['username']) ? $_REQUEST['username'] : 'Unkonw';
	$array['hobby'] = isset($_REQUEST['hobby']) ? $_REQUEST['hobby'] : 'Unkown';
	echo json_encode($array);
}
sleep(30);
sendBack();
?>
