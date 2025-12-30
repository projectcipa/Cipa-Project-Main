
<?php
    session_start();

    // Se já estiver logado, NÃO deixa acessar o login
    if (isset($_SESSION['id_funcionario']) && isset($_SESSION['ADM_funcionario'])) {

        //Funcionário ADM = 0
        if ($_SESSION['ADM_funcionario'] == 0) {
            header("Location: ./paginaInicialFuncionario.php");
            exit;
        }

        //Admin ADM = 1
        if ($_SESSION['ADM_funcionario'] == 1) {
            header("Location: ./paginaInicial.php");
            exit;
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/login.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
</head>
<body>

    <header>

        <h1>Votação Cipa  [nome da empresa]</h1>

        <h2>Entre com CPF</h2>

    </header>

    <section id="secaoLoginCPF">

        <form action="./processamentoLoginAdmin.php" method="POST">

            <label for="cpf_funcionario">CPF</label><br>
            <input type="text" placeholder="Insira aqui seu CPF" maxlength="11" id="cpf_funcionario" name="cpf_funcionario">

            <button type="submit">Entrar</button>

        </form><br>

        <a href="../index.php">Ir para o login de Funcionario</a>

    </section>


</body>

</html>
