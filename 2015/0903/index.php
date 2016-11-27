<?php
header('Content-Type:text/html;charset=utf-8');
$obj = get_browser();
echo '<pre>';
print_r($obj);
echo '</pre>';
echo '<h3>ok!</h3>';
?>