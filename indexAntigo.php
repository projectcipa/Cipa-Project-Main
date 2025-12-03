<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    require_once __DIR__ . "/controllers/CarregarView.php";
    require_once __DIR__ . "/controllers/FuncionarioController.php";

    $view = $_GET['view'] ?? null;
    $controller = $_GET['controller'] ?? null;
    $action = $_GET['action'] ?? null;

    if ($controller && $action) {
        $controllerName = $controller . "Controller";
        $ctrl = new $controllerName();
        echo $ctrl->$action($_SERVER['REQUEST_METHOD']);
        exit;
    }   

    if ($view) {
        carregarView($view);
    } else {
        carregarView("PaginaInicial");
    }
?>
