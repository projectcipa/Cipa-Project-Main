<?php

    require_once __DIR__ . "/controllers/CarregarView.php";
    $view = $_GET['view'] ?? 'PaginaInicial';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sistema CIPA</title>
</head>
<body>

<?php
    carregarView($view);
?>