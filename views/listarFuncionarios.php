<?php
    require_once __DIR__ . "/../controllers/FuncionarioController.php";
    $controller = new FuncionarioController();
    session_start();
    $funcionarios  = $controller->list("GET");
    
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Funcionários</title>
    <link rel="stylesheet" href="./css/listarFuncionarios.css">
</head>
<body>

    <h2>Lista de Funcionários Cadastrados</h2>
    

    <?php if (empty($funcionarios)): ?>
        <p>Nenhum funcionário cadastrado no momento.</p>
    <?php else: ?>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Completo</th>
                    <th>E-mail</th>
                    <th>Matrícula</th>
                    <th>CPF</th>
                    <th>Contratação</th>
                    <th>ADM</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcionarios as $funcionario): ?>
                    <!--<?php echo("teste")?>-->
                    <tr>
                        <td><?php echo $funcionario['id_funcionario']; ?></td>
                        <td><?php echo $funcionario['nome_funcionario'] . ' ' . $funcionario['sobrenome_funcionario']; ?></td>
                        <td><?php echo $funcionario['email_funcionario']; ?></td>
                        <td><?php echo $funcionario['matricula_funcionario']; ?></td>
                        <td><?php echo $funcionario['CPF_funcionario'] ?? 'N/A'; ?></td>
                        <td><?php echo $funcionario['data_contratacao_funcionario']; ?></td>
                        <td>
                            <?php echo ($funcionario['ADM_funcionario'] == 1) ? 'Sim' : 'Não'; ?>
                        </td>
                        <td>
                            <?php 
                                if ($funcionario['ativo_funcionario'] == 1) {
                                    echo '<span class="ativo">Ativo</span>';
                                } else {
                                    echo '<span class="inativo">Inativo</span>';
                                }
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>

</body>
</html>