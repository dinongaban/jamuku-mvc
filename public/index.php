<?php
session_start();

require_once '../app/core/Controller.php';
require_once '../app/core/Database.php';

$route = isset($_GET['route']) ? $_GET['route'] : 'home/index';
$params = explode('/', $route);

$controllerName = ucfirst($params[0]) . 'Controller';
$method = $params[1] ?? 'index';
$args = array_slice($params, 2);

$controllerFile = "../app/controllers/" . $controllerName . ".php";
if (!file_exists($controllerFile)) {
    die("Controller not found!");
}

require_once $controllerFile;
$controller = new $controllerName();

if (!method_exists($controller, $method)) {
    die("Method not found in $controllerName");
}

call_user_func_array([$controller, $method], $args);
