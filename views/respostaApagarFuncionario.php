<?php
    require_once __DIR__ . "/../controllers/FuncionarioController.php";
    $controller = new FuncionarioController();

    $success = $controller->delete($_SERVER["REQUEST_METHOD"]);

    if ($success) {
        echo("<h1 align='center'>Funcionário apagado com sucesso!</h1>");
    } else {
        echo("<h1 align='center'>Falha ao apagar funcionário.</h1>");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/cadastrarFuncionarios.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status da Exclusão</title>
</head>
<body>
    <a href='./listarFuncionarios.php'><button>Voltar para a Lista</button></a>
    <a href='/../index.php'><button>Voltar para a Página Inicial</button></a>
</body>
</html>