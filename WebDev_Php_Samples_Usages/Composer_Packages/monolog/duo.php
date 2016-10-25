<?php
chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';

$pdo = new PDO("mysql:host=localhost;dbname=monolog", 'root', 'toxindzners');
$mysqlHandler = new \MySQLHandler\MySQLHandler($pdo, "log", [], \Monolog\Logger::DEBUG);

$streamHandler = new \Monolog\Handler\StreamHandler('/var/www/html/aca/monolog/log.log');

$logger = new \Monolog\Logger('logger');

$logger->pushHandler($mysqlHandler);
$logger->pushHandler($streamHandler);

$logger->addWarning('DUO error message');