
<?php
    session_start();

    // Se já estiver logado, NÃO deixa acessar o login
    if (isset($_SESSION['id_funcionario']) && isset($_SESSION['ADM_funcionario'])) {

        // Funcionário
        if ($_SESSION['ADM_funcionario'] == 0) {
            header("Location: ./views/paginaInicialFuncionario.php");
            exit;
        }

        // Admin
        if ($_SESSION['ADM_funcionario'] == 1) {
            header("Location: ./views/paginaInicial.php");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>

    <header>

        <h1>Votação Cipa  [nome da empresa]</h1>

        <h2>Entre com CPF</h2>

    </header>

    <section id="secaoLoginCPF">

        <form action="./views/processamentoLoginFuncionario.php" method="POST">

            <label for="cpf_funcionario">CPF</label><br>
            <input type="text" placeholder="Insira aqui seu CPF" maxlength="11" id="cpf_funcionario" name="cpf_funcionario">

            <button type="submit">Entrar</button>

        </form><br>

        <a href="./views/loginAdmin.php">Ir para o login de Admin</a>

    </section>


</body>

</html>
