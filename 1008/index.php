<?php
$object_id = '1578,9999';
$object_id_array = explode(',', $object_id);
if(count($object_id_array) > 1)
	echo 'Mutil Game';
else
	echo 'Signle Game';
?>
