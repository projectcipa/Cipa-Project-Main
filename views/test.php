<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once __DIR__ . "/../controllers/CandidatoController.php";
    $controller = new CandidatoController();
    $view = $controller->create("POST");

    if ($view) {
        echo "Bateu";
    }
?>