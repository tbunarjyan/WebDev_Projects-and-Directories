<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', 'MySql');
define('DB_NAME', 'blog');

$dbConnection = mysqli_connect(DB_HOST,DB_USER, DB_PASSWORD, DB_NAME);
if (!$dbConnection) {
    die("Connection failed: " . mysqli_connect_error());
}