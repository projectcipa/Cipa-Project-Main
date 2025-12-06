<?php
    if (!isset($funcionario)) {
        require_once __DIR__ . "/../models/Funcionario.php";
        require_once __DIR__ . "/../repositories/FuncionarioDAO.php";

        $dao = new FuncionarioDAO();
        $id = isset($_GET['id']) ? intval($_GET['id']) : 0;

        if ($id <= 0) {
            echo "<p>ID inválido.</p>";
            exit;
        }

        $funcionario = $dao->funcionarioPorId($id);

        if (!$funcionario) {
            echo "<p>Funcionário não encontrado.</p>";
            exit;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/cadastrarFuncionarios.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Funcionário</title>
</head>
<body>
    <form action="./respostaEditarFuncionario.php" method="POST">
        <input type="hidden" name="id_funcionario" value="<?php echo $funcionario->getId_funcionario(); ?>">

        <label for="nome">Nome: </label>
        <input type="text" name="nome_funcionario" id="nome" value="<?php echo htmlspecialchars($funcionario->getNome_funcionario()); ?>">
        <br>
        <label for="sobrenome">Sobrenome: </label>
        <input type="text" name="sobrenome_funcionario" id="sobrenome" value="<?php echo htmlspecialchars($funcionario->getSobrenome_funcionario()); ?>">
        <br>
        <label for="CPF">CPF: </label>
        <input type="text" name="CPF_funcionario" id="CPF" maxlength="11" value="<?php echo htmlspecialchars($funcionario->getCPF_funcionario()); ?>">
        <br>
        <label for="data_nascimento">Data de Nascimento: </label>
        <input type="date" name="data_nascimento_funcionario" id="data_nascimento" value="<?php echo htmlspecialchars($funcionario->getData_nascimento_funcionario()); ?>">
        <br>
        <label for="data_admissao">Data de Admissão: </label>
        <input type="date" name="data_contratacao_funcionario" id="data_contratacao" value="<?php echo htmlspecialchars($funcionario->getData_contratacao_funcionario()); ?>">
        <br>
        <label for="telefone">Telefone: </label>
        <input type="text" name="telefone_funcionario" id="telefone" maxlength="11" value="<?php echo htmlspecialchars($funcionario->getTelefone_funcionario()); ?>">
        <br>
        <label for="matricula">Matrícula: </label>
        <input type="text" name="matricula_funcionario" id="matricula" maxlength="20" value="<?php echo htmlspecialchars($funcionario->getMatricula_funcionario()); ?>">
        <br>
        <label for="codigo_voto">Código de Voto: </label>
        <input type="text" name="codigo_voto_funcionario" id="codigo_voto" maxlength="8" value="<?php echo htmlspecialchars($funcionario->getCodigo_voto_funcionario()); ?>">
        <br>
        <label for="ADM">Administrador (ADM): </label>
        <select name="ADM_funcionario" id="ADM">
            <option value="true" <?php echo $funcionario->getADM_funcionario() ? "selected" : ""; ?>>Sim</option>
            <option value="false" <?php echo !$funcionario->getADM_funcionario() ? "selected" : ""; ?>>Não</option>
        </select>
        <br>
        <label for="email">E-mail: </label>
        <input type="email" name="email_funcionario" id="email" value="<?php echo htmlspecialchars($funcionario->getEmail_funcionario()); ?>">
        <br>
        <!--<label for="senha">Senha: </label>
        <input type="password" name="senha_funcionario" id="senha" value="<?php echo htmlspecialchars($funcionario->getSenha_funcionario()); ?>">
        <br>-->
        <!--<select name="ativo_funcionario" id="ativo">
        <label for="ativo">Ativo:</label>
            <option value="1" <?php echo $funcionario->getAtivo_funcionario() ? "selected" : ""; ?>>Sim</option>
            <option value="0" <?php echo !$funcionario->getAtivo_funcionario() ? "selected" : ""; ?>>Não</option>
        </select>
        <br>-->
        <button type="submit">Salvar Alterações</button>
    </form>
    <br>
    <form action="./respostaApagarFuncionario.php" method="POST" onsubmit="return confirm('Deseja realmente apagar este funcionário?');">
        <input type="hidden" name="id_funcionario" value="<?php echo $funcionario->getId_funcionario(); ?>">
        <button type="submit">Apagar Funcionário</button>
    </form>

    <a href="./listarFuncionarios.php"><button>Voltar à lista</button></a>
</body>
</html>