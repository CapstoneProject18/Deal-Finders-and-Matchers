<?php
global $connection;

define("DSN", "mysql:host=localhost;dbname=demo");

define("username","root");

define("password","");

try 
{
   $connection = new PDO(DSN,username,password); 

}catch (PDOException $exc) 
{
    echo "Connection to database failed";
}