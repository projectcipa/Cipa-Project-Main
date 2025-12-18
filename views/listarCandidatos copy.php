<?php
    require_once __DIR__ . "/../controllers/CandidatoController.php";
    $controller = new CandidatoController();
    session_start();
    $candidatos  = $controller->listar("GET");
    
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Candidatos</title>
    <link rel="stylesheet" href="../css/listarFuncionarios.css">
</head>
<body>

    <h2>Lista de Candidatos Cadastrados</h2>
    

    <?php if (empty($candidatos)): ?>
        <p>Nenhum Candidato cadastrado no momento.</p>

        <a href="../index.php">
            <button>Voltar à Página Inicial</button>
        </a>

    <?php else: ?>
        
        <table class = "tableDesktop">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data de Registro</th>
                    <th>E-mail</th>
                    <th>Matrícula</th>
                    <th>CPF</th>
                    <th>Data de Contratação</th>
                    <th>ADM</th>
                    <th>Status</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($candidatos as $candidato): ?>
                    <!--<?php echo("teste")?>-->
                    <tr>
                        <td><?php echo $candidato['id_candidato']; ?></td>
                        <td><?php echo $candidato['data_registro_candidato'] . ' ' . $funcionario['sobrenome_funcionario']; ?></td>
                        <td><?php echo $candidato['nome_funcionario']; ?></td>
                        <td><?php echo $funcionario['matricula_funcionario']; ?></td>
                        <td><?php echo $funcionario['CPF_funcionario'] ?? 'N/A'; ?></td>
                    <!--<td><?php echo $candidato['funcionario_fk']; ?></td>-->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <table class = "tableMobile">
            <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>Matrícula</th>
                    <th>CPF</th>
                    <th>Status</th>
                    <th>Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcionarios as $funcionario): ?>
                    <!--<?php echo("teste")?>-->
                    <tr>
                        <td><?php echo $funcionario['nome_funcionario'] . ' ' . $funcionario['sobrenome_funcionario']; ?></td>
                        <td><?php echo $funcionario['matricula_funcionario']; ?></td>
                        <td><?php echo $funcionario['CPF_funcionario'] ?? 'N/A'; ?></td>
                        <td>
                            <?php 
                                if ($funcionario['ativo_funcionario'] == 1) {
                                    echo '<span class="ativo">Ativo</span>';
                                } else {
                                    echo '<span class="inativo">Inativo</span>';
                                }
                            ?>
                        </td>
                         <td class="opcoesbtns">
                            <!-- Edit -->
                            <a href="./editarFuncionario.php?id=<?php echo $funcionario['id_funcionario']; ?>"><button>Editar</button></a>

                            <!-- Delete (POST) -->
                            <form action="./respostaApagarFuncionario.php" method="POST" style="display:inline;" onsubmit="return confirm('Deseja realmente apagar este funcionário?');">
                                <input type="hidden" name="id_funcionario" value="<?php echo $funcionario['id_funcionario']; ?>">
                                <button type="submit">Apagar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    <?php endif; ?>

</body>
</html>