<?php
$mem = new Memcache();
$mem->connect('127.0.0.1', 22201);

echo memcache_get($mem, 'A_queue'), '<br />';
echo memcache_get($mem, 'A_queue'), '<br />';
echo memcache_get($mem, 'A_queue'), '<br />';

echo '<hr />';

echo memcache_get($mem, 'B_queue'), '<br />';
echo memcache_get($mem, 'B_queue'), '<br />';
echo memcache_get($mem, 'B_queue'), '<br />';

//close
$mem->close();
echo '<h3>Runing is ok!</h3>';
?>

