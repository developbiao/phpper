<?php
/*
*@Describe:Json的学习
*@Author:GongBiao
*@Date:2015/07/26
*/
header('Content-Type:text/html; charset=utf-8');

function createHtmlTag($tag=""){
	echo "<h3>$tag</h3><br/>";
}

createHtmlTag("Hello");

createHtmlTag("JSON和serialize 对比");

$member = array("username", "age");

var_dump($member);

//joson  加密
$jsonObj = json_encode($member);

//serialize
$serializeObj = serialize($member);

createHtmlTag($jsonObj);
createHtmlTag($serializeObj);


echo '<h3>Runing is Ok!</h3>';
?>
