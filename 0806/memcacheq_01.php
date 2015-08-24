<?php
/*
 * @Describe:memcacheq test
 * @Author:GongBiao
 * @Date:2015/08/0
 */

$memcache_obj = new Memcache(); //create memcache element obj
$memcache_obj->connect('127.0.0.1', 22201); //use connect memcacheq
//var_dump($memcache_obj);
/* append a message to queue */
/*
memcache_set($memcache_obj, 'demoqueue1', '1', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '2', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '3', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '4', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '5', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '6', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '7', MEMCACHE_COMPRESSED, 0);
*/
memcache_set($memcache_obj, 'demoqueue1', '1', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '2', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '3', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '4', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '5', MEMCACHE_COMPRESSED, 0);


//第二种方法添加值
$memcache_obj->set('tom', 'cat');

//获取
echo $memcache_obj->get('tom');
echo $memcache_obj->get('demoqueue1');
echo $memcache_obj->get('demoqueue1');
echo $memcache_obj->get('demoqueue1');
$memcache_obj->close();


?>
