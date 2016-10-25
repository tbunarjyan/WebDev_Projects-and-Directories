<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'MySql');
define('DB_NAME', 'whateveritis');


$dbConnection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$dbConnection) {
    die("Connection failed: " . mysqli_connect_error());
}

$alphabet=range('a','z');

for($i=0;$i<10000;$i++){
    $name='';
    for($j=0;$j<10;$j++){
        $name.=$alphabet[rand(0,25)];
    }
    $sql="INSERT INTO people (name) VALUES ('".$name."')";
    $result=mysqli_query($dbConnection,$sql);
}




