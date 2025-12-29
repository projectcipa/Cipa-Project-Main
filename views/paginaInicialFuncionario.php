<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    session_start();

    // Se não estiver logado ou se não for funcionário
    if (!isset($_SESSION['id_funcionario']) || $_SESSION['ADM_funcionario'] != 0) {
        header("Location: ../index.php"); // login
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial Funcionário</title>
</head>
<body>

    <h1>Bem-vindo, <?= $_SESSION['nome_funcionario'] ?></h1>

    <p>Você está logado como funcionário.</p>

    <a href="logout.php">Sair</a>

</body>
</html>
