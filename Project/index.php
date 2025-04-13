<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$action = isset($_GET['action']) ? $_GET['action'] : 'display';

$controllerClassName = ucfirst($controller) . "Controller";
$controllerFilePath = __DIR__ . '/Controllers/' . $controllerClassName . '.php';

if (file_exists($controllerFilePath)) {
    include_once $controllerFilePath;
    if (class_exists($controllerClassName)) {
        $ct = new $controllerClassName();
        $ct->route(); // This should call the route method of the specific controller
    } else {
        echo "Controller class not found.";
    }
} else {
    echo "Controller file not found.";
}

/* php
#first routing: define default

    $controller = (isset($_GET['controller'])) ? $_GET['controller'] : "home";
    $action = (isset($_GET['action'])) ? $_GET['action'] : "display";   #list
    $id = (isset($_GET['id'])) ? intval($_GET['id']) : -1;
    
    $controllerClassName = ucfirst($controller) . "Controller";
    
    include_once "Controllers/$controllerClassName.php";

    $ct = new $controllerClassName();
    $ct->route();
?> */
?>