<?php 
header('content-type:text/html;charset=utf-8');
require_once 'upload.class.php';
$upload=new upload('myFile','mypic');
$dest=$upload->uploadFile();
echo $dest;
