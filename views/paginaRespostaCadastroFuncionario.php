<?php
    require_once __DIR__ . "/../controllers/FuncionarioController.php";
    $controller = new FuncionarioController();

    $render = $controller->create($_SERVER["REQUEST_METHOD"]);

    if ($render) {
        echo("<h1>Usuário cadastrado com sucesso!");
    } else {
        echo("<h1>Usuário Não foi cadastrado!</h1><br>");
    }
    echo("<a href='./cadastroFuncionarios.php'>Retornar para a página anterior</a>")
?>