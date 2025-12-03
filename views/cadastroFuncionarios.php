<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/cadastrarFuncionarios.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de funcionarios</title>
</head>
<body>
    <form action="./respostaCadastroFuncionario.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome_funcionario" id="nome">
        <br>
        <label for="sobrenome">Sobrenome: </label>
        <input type="text" name="sobrenome_funcionario" id="sobrenome">
        <br>
        <label for="CPF">CPF: </label>
        <input type="text" name="CPF_funcionario" id="CPF" maxlength="11">
        <br>
        <label for="data_nascimento">Desata de Nascimento: </label>
        <input type="date" name="data_nascimento_funcionario" id="data_nascimento">
        <br>
        <label for="data_admissao">Data de Admissão: </label>
        <input type="date" name="data_contratacao_funcionario" id="data_contratacao">
        <br>
        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone_funcionario" id="telefone">
        <br>
        <label for="matricula">Matrícula: </label>
        <input type="text" name="matricula_funcionario" id="matricula">
        <br>
        <label for="codigo_voto">Código de Voto: </label>
        <input type="text" name="codigo_voto_funcionario" id="codigo_voto">
        <br>
        <label for="ADM">Administrador (ADM): </label>
        <select name="ADM_funcionario" id="ADM">
            <option value="true">Sim</option>
            <option value="false">Não</option>
        </select>
        <br>
        <label for="email">E-mail: </label>
        <input type="email" name="email_funcionario" id="email">
        <br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha_funcionario" id="senha">
        <br>
        <button>Criar</button>
    </form><br>
    <a href="javascript:history.go(-1)">Voltar</a> 
</body>
</html>