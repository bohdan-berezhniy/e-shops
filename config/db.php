<?php
/**
 *Conect to database 
 * 
 */

    $dblocation = "127.0.0.1";
    $dbname = "myshop";
    $dbuser = "root";
    $dbpasswd = "";
    
    // підключення до бд
    $db = mysql_connect($dblocation, $dbuser, $dbpasswd);
    
    if(!$db){
        echo 'Error conect to database';
        exit();
    }
    // кодування по замовчуванню для поточного зєднання
    mysql_set_charset("utf8");
    
    if(!mysql_select_db($dbname, $db)){
        echo "Error conect to database - {$dbname}";
        exit();
    }