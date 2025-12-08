<?php
    require_once __DIR__ . "/../controllers/FuncionarioController.php";
    $controller = new FuncionarioController();

    $render = $controller->create($_SERVER["REQUEST_METHOD"]);

    if ($render) {
        echo("<h1 align='Center'>Funcionário cadastrado com sucesso!");
    } else {
        echo("<h1 align='Center'>Funcionário Não foi cadastrado!</h1><br>");
    }
    //echo("<a href='./cadastroFuncionarios.php'>Vizualizar Lista de Funcionários</a>")
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/cadastrarFuncionarios.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status do Cadastro</title>
</head>
<body>
    
    <a href='./listarFuncionarios.php'>
        <button>Vizualizar Lista de Funcionários</button>
    </a>

    <a href='./cadastroFuncionarios.php'>
        <button>Voltar para a Página de Cadastro</button>
    </a>

    <a href='../index.php'>
        <button>Voltar para a Página Inicial</button>
    </a>



</body>
</html>