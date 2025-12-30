
<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    session_start();

    // Se não estiver logado ou se não for funcionário
    if (!isset($_SESSION['id_funcionario']) || $_SESSION['ADM_funcionario'] != 1) {
        header("Location: ./loginAdmin.php"); // login Admin
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/paginaInicial.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>

    <header>

        <h1>Sistema da Cipa</h1>

    </header>

    <div class="opcoes">

        <a href="./cadastroFuncionarios.php">
            <button>Cadastrar Funcionarios</button>
        </a>

        <a href="./CadastroCandidato.php">
            <button>Cadastrar Candidato</button>
        </a>
    
         <a href="./listarFuncionarios.php">
            <button>Listar Funcionarios</button>
        </a>

        <a href="./listarCandidatos.php">
            <button>Listar Candidatos</button>
        </a>

         <a href="logout.php">Sair</a>

    </div>

</body>
</html>
