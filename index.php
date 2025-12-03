<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/paginaInicial.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>

    <header>

        <h1>Sistema da Cipa</h1>

    </header>


    <div class="opcoes">

        <a href="./views/cadastroFuncionarios.php">
            <button>Cadastrar Funcionarios</button>
        </a>
    
         <a href="./views/listarFuncionarios.php">
            <button>Listar Funcionarios</button>
        </a>

    </div>


    <!--<?php/*
        require_once __DIR__ . "/models/Funcionario.php";
        require_once __DIR__ . "/repositories/FuncionarioDAO.php";
        $dao = new FuncionarioDAO();
        $funcionario = new Funcionario(
            1,
            "Felipe",
            "Xavier",
            "44444444444",
            "2025-12-03",
            "2025-12-04",
            "71993295049",
            "novo1234",
            "novo1234",
            true,
            true,
            "felipe@email.com",
            "felipe123"
        );
        echo("<br>");
        $dao->funcionarioPorId(1);*/
    ?>-->

</body>
</html>