<?php
chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';

$pdo = new PDO("mysql:host=localhost;dbname=monolog", 'root', 'toxindzners');
$mysqlHandler = new \MySQLHandler\MySQLHandler($pdo, "log", [], \Monolog\Logger::DEBUG);

$logger = new \Monolog\Logger('logger', [$mysqlHandler]);

$logger->addWarning('error message');

