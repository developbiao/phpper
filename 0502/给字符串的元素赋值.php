<?php
header('Content-Type:text/html; charset=utf-8');
/*
 * refrence http://php.net//manual/en/language.types.type-juggling.php
 * @Describe:php automatic type
 */
$a = 'car';
$a[1] = 'b'; //cbr
echo $a, '<br />';
echo '<h3>Program runing is ok!</h3>';
?>
