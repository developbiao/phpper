<?php
//重定向到b.php
header('Location: http://localhost/0916/b.php', true, 307); //307带参数的重定向
exit;
echo '<pre>';
print_r($_POST);
echo '</pre>';
?>