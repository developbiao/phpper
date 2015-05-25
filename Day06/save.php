<?php
header("Content-Type:text/html; charset=utf-8");
$str = $_POST['title'].','.$_POST['content']."\n";
$fh = fopen('./message.txt', 'a');
fwrite($fh, $str);
fclose($fh);
echo "<script>location='proc.php'</script>";
?>