<?php
header('Content-Type:text/html; charset=utf-8');
$id = $_POST['id'];
$arr = array('a.png', 'b.png', 'c.png');
echo "<img src='{$arr[$id]}' />";
?>
