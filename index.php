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

        <form action="./views/paginaInicialFuncionarios.php">

            <label for="cpf">CPF</label><br>
            <input type="text" placeholder="Insira aqui seu CPF" maxlength="11" id="cpf_funcionario" name="cpf_funcionario">

            <button>Entrar</button>

        </form><br>

        <a href="./views/paginaInicial.php">Ir para o login de Admin</a>

    </section>


</body>

</html>
