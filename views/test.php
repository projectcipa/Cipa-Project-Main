<?php
    require_once __DIR__ . "/../controllers/CandidatoController.php";
    $controller = new CandidatoController();
    $view = $controller->create("POST");

    if ($view) {
        echo "Bateu";
    }
?>