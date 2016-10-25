<?php
chdir(dirname(__DIR__));

require_once 'vendor/autoload.php';

use \Monolog\Handler\StreamHandler;

$streamHandler = new StreamHandler('/var/www/html/aca/monolog/log.log');


$logger = new \Monolog\Logger('logger');

$logger->pushHandler($streamHandler);

$logger->error('error message', [
    'flan' => 'fstan'
]);

