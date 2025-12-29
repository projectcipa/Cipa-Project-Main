<?php
   /* session_start();
    require_once __DIR__ . "/../utils/Conexao.php";

    $cpf = $_POST['cpf'];

    $sql = "SELECT * FROM funcionarios WHERE cpf = '$cpf' AND admin = 1";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $admin = $result->fetch_assoc();

        $_SESSION['id'] = $admin['id'];
        $_SESSION['nome'] = $admin['nome'];
        $_SESSION['admin'] = 1;

        header("Location: admin_home.php");
    } else {
        echo "CPF inválido ou você não é admin.";
    }*/

?>