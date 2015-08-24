<?php
//test memcached
//$mem = memcache_connect("192.168.2.37", 11211);
//var_dump($mem);


//$mc = new Memcache();
////test memcacheq
//$add_server_flag = $mc->addServer("192.168.2.37", 22201);
////var_dump($add_server_flag);
//
//$set_result = $mc->set("name", "gongbiao");
//var_dump($set_result);
//$mc->set("bar", "Memcached...");
//
//$arr = array(
//    $mc->get("name"),
//    $mc->get("bar")
//);
//var_dump($arr);
////print_r($arr);
//echo '<h3>Runing is ok!</h3>';


/* connect to memcached server */
$memcache_obj = memcache_connect('memcacheq_host', 22201);

/* append a message to queue */
memcache_set($memcache_obj, 'demoqueue1', '1', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '2', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '3', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '4', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '5', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '6', MEMCACHE_COMPRESSED, 0);
memcache_set($memcache_obj, 'demoqueue1', '7', MEMCACHE_COMPRESSED, 0);

/* consume a message from 'demoqueue1' */
memcache_get($memcache_obj, 'demoqueue1');

memcache_close($memcache_obj);


// redbean
//CRUD


?>

