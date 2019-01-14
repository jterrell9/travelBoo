<?php
define('DB_SERVER', 'localhost');       //add remote IP and Port of database
define('DB_USERNAME', 'username');      //add database username here
define('DB_PASSWORD', 'password');      //add database password here
define('DB_DATABASE', 'db-name');       //add database name here

try{
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
}catch(Exception $e){
    $error_message = $e->getMessage();
    echo "an error has occurred: $error_message";
}
