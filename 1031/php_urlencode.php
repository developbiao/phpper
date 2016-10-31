<?php
header('Content-Type:text/html;charset=utf-8');
//$user_name = urldecode($_GET['name']);
$subject = 'php&detail=html';
$subject = urlencode($subject);
echo $subject;
//echo $user_name;
//echo '<h3>Hello</h3>';

?>
