<?php
header('Content-Type:text/html; charset=utf-8');
sleep(10);
$name = $_REQUEST['name'];
echo "<h3>Hello {$name}</h3>";
?>