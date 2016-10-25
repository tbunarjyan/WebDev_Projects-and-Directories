<?php

const ROOT_PATH = "/var/www/html/aca/day_30/mvc/";

$controller = $_GET['controller'];
$controller = ucfirst($controller);
$controller .= 'Controller';
require_once "Controller/" . $controller . ".php";

$action = $_GET['action'];
$action .= "Action";

$controllerObject = new $controller();

$controllerObject->$action();