<?php
require 'rb.php';
R::setup( 'mysql:host=localhost;dbname=woogi0_1', 'root', '123456' ); //for both mysql or mariaDB

// save
//$post = R::dispense( 'post' );
//$post->text = 'Hello World';
//$post->name = 'caiyuan';
//$post->password = "caiyuan123456";
//$id = R::store( $post );          //Create or Update
//echo $id;

//$post = R::load( 'post', 1 );   //Retrieve
//$post = R::findOne('post', 'name=?', array("caiyuan"));
//echo json_encode($post->getProperties());

// retrieve multiple records from database

// update
//$post = R::load('post', 1);
//$post->name = "gongbiao";
//R::store($post);

//Delete
$post = R::load('post', 1);
R::trash( $post );
