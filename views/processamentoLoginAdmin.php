<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    session_start();
    require_once __DIR__ . "/../utils/Conexao.php";

    $conn = Conexao::fazerConexao();

    $cpf = $_POST['cpf_funcionario'] ?? null;

    if (!$cpf) {
        die("CPF não informado");
    }

    $sql = "SELECT id_funcionario, nome_funcionario, ADM_funcionario
            FROM funcionario
            WHERE CPF_funcionario = :cpf AND ADM_funcionario = 1";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':cpf', $cpf);
    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $funcionario = $stmt->fetch(PDO::FETCH_ASSOC);

        $_SESSION['id_funcionario']   = $funcionario['id_funcionario'];
        $_SESSION['nome_funcionario'] = $funcionario['nome_funcionario'];
        $_SESSION['ADM_funcionario']  = 1;

        header("Location: paginaInicial.php");
        exit;
    } else {
        echo "CPF inválido ou você não é funcionário.";
    }
?>