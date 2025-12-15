<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Funcionarios</title>
    <link rel="stylesheet" href="../css/cadastrarFuncionarios.css">
</head>
<body>

    <div class="container">
        <form class="cadastro-form" action="./respostaCadastroFuncionario.php" method="POST">
            <h2 class="form-title">cadastre-se</h2>

            <hr>

            <div class="form-group">
                <label for="nome_funcionario">Nome</label>
                <input type="text" id="nome_funcionario" name="nome_funcionario" class="styled-input">
            </div>

            <div class="form-group">
                <label for="sobrenome_funcionario">Sobrenome</label>
                <input type="text" id="sobrenome_funcionario" name="sobrenome_funcionario" class="styled-input">
            </div>

            <div class="form-group">
                <label for="CPF_funcionario">CPF</label>
                <input type="text" id="CPF_funcionario" name="CPF_funcionario" class="styled-input" maxlength="11">
            </div>

            <div class="form-group">
                <label for="data_nascimento_funcionario">Data de nascimento</label>
                <input type="date" id="data_nascimento_funcionario" name="data_nascimento_funcionario" class="styled-input">
            </div>

            <div class="form-group">
                <label for="data_contratacao_funcionario">Data de Contratação</label>
                <input type="date" id="data_contratacao_funcionario" name="data_contratacao_funcionario" class="styled-input">
            </div>

            <div class="form-group">
                <label for="telefone_funcionario">Telefone</label>
                <input type="text" id="telefone_funcionario" name="telefone_funcionario" class="styled-input" maxlength="11">
            </div>

            <div class="form-group">
                <label for="matricula_funcionario">Matrícula</label>
                <input type="text" id="matricula_funcionario" name="matricula_funcionario" class="styled-input" maxlength="20">
            </div>

            <div class="form-group">
                <label for="codigo_voto_funcionario">Código de Voto</label>
                <input type="text" id="codigo_voto_funcionario" name="codigo_voto_funcionario" class="styled-input" maxlength="8">
            </div>

            <div class="form-group select-group">
                <label class="radio-title">Administrador (ADM):</label>
                <select class ="selectAdm"name="ADM_funcionario" id="ADM">
                    <option value="true">Sim</option>
                    <option value="false">Não</option>
                </select>
            </div>

            <div class="form-group">
                <label for="email_funcionario">Email</label>
                <input type="email" id="email_funcionario" name="email_funcionario" class="styled-input">
            </div>

            <div class="form-group">
                <label for="senha_funcionario">Senha</label>
                <input type="password" id="senha_funcionario" name="senha_funcionario" class="styled-input">
            </div>

            <div class="button-group">
                <button type="submit" class="btn-criar">Criar</button>
            </div>
        </form>
    </div>

</body>
</html>
