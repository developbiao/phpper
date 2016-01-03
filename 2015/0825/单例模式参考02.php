<?php
/*
面向对象复习
*/
header('Content-Type:text/html; charset=utf-8');
class User {
    static function getInstance()
    {
    if (self::$instance == NULL) { // If instance is not created yet, will create it.
        self::$instance = new User();
    }
    return self::$instance;
    }
    private function __construct() 
    // Constructor method as private  so by mistake developer not crate
    // second object  of the User class with the use of new operator
    {
    }
    private function __clone()
    // Clone method as private so by mistake developer not crate 
    //second object  of the User class with the use of clone.
    {
    }
     
    function Log($str)
    { 
        echo $str;
    }
    static private $instance = NULL;
}


User::getInstance()->Log("Welcome User");

echo '<h3>Program Ring is ok! </h3>';



?>
