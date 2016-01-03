<?php
header("Content-Type:text/html; charset=utf-8");
/*
echo '<pre>';
print_r($_SERVER);
echo '</pre>';
*/

echo '您的IP来至',$_SERVER['REMOTE_ADDR'];

?>
