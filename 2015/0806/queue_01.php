<?php
$mem = new Memcache();
$mem->connect('127.0.0.1', 22201);

//set value
memcache_set($mem, 'A_queue', 'one', MEMCACHE_COMPRESSED, 0);
memcache_set($mem, 'A_queue', 'two', MEMCACHE_COMPRESSED, 0);
memcache_set($mem, 'A_queue', 'three', MEMCACHE_COMPRESSED, 15);

memcache_set($mem, 'B_queue', 'bom', MEMCACHE_COMPRESSED, 0);
memcache_set($mem, 'B_queue', 'pter', MEMCACHE_COMPRESSED, 0);
memcache_set($mem, 'B_queue', 'yami', MEMCACHE_COMPRESSED, 0);
memcache_set($mem, 'B_queue', 'liyuang', MEMCACHE_COMPRESSED, 0);

memcache_set($mem, 'C_queue', '1', MEMCACHE_COMPRESSED, 0);
memcache_set($mem, 'C_queue', '2', MEMCACHE_COMPRESSED, 0);
memcache_set($mem, 'C_queue', '3', MEMCACHE_COMPRESSED, 0);
memcache_set($mem, 'C_queue', '4', MEMCACHE_COMPRESSED, 0);



//delete
//memcache_delete($mem, 'A_queue');


//面向对象的方式
//$mem->delete('B_queue');

//get value
echo memcache_get($mem, 'B_queue'), '<br />';
echo memcache_get($mem, 'B_queue'), '<br />';
echo memcache_get($mem, 'B_queue'), '<br />';

echo 'Ok!';

?>
