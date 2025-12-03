<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./views/cadastroFuncionarios.php">Cadastrar Funcionarios</a>
    <?php
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
        $dao->funcionarioPorId(1);
        
    ?>
</body>
</html>