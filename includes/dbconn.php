<?php 
    define('DB_HOST','localhost');
    define('DB_USER','root');
    define('DB_PASS','');
    define('DB_NAME','teacherleavedb');
    
    try
    {
        $dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
    }
        catch (PDOException $e)
    {
        echo "Looks like you don't have any database/connection. Please check your Database Connection and Try Again! </br>";
        exit("Error: " . $e->getMessage());
    }
?>