<?php
    require_once __DIR__ . "/../controllers/CandidatoController.php";
    $controller = new CandidatoController();
    session_start();
    $candidatos = $controller->listar("GET");
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
        
        <table class="tableDesktop">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Data de Registro</th>
                    <th>Nome do Candidato</th>
                    <th>Número do Candidato</th>
                    <th>Cargo</th>
                    <th>Status</th>
                    <th>Quantidade de Votos</th>

                </tr>
            </thead>
            <tbody>
                <?php foreach ($candidatos as $candidato): ?>
                    <tr>
                        <td><?php echo $candidato['id_candidato']; ?></td>
                        <td><?php echo $candidato['data_registro_candidato']; ?></td>
                        <td><?php 

                            echo $candidato['nome_funcionario'] . ' ' . $candidato['sobrenome_funcionario']; 
                        ?></td>
                        <td><?php echo $candidato['numero_candidato']; ?></td>
                        <td><?php echo $candidato['cargo_candidato'] ?? 'N/A'; ?></td>
                        <td><?php echo $candidato['status_candidato_ata']; ?></td>
                        <td><?php echo $candidato['quantidade_voto_candidato'] ?? '0'; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <table class="tableMobile">
            <thead>
                <tr>
                    <th>Nome Completo</th>
                    <th>Número</th>
                    <th>Cargo</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($candidatos as $candidato): ?>
                    <tr>
                        <td><?php echo $candidato['nome_funcionario'] . ' ' . $candidato['sobrenome_funcionario']; ?></td>
                        <td><?php echo $candidato['numero_candidato']; ?></td>
                        <td><?php echo $candidato['cargo_candidato'] ?? 'N/A'; ?></td>
                        <td><?php echo $candidato['status_candidato_ata']; ?></td>
                        <td class="opcoesbtns">
                            <!-- Edit -->
                            <a href="./editarCandidato.php?id=<?php echo $candidato['id_candidato']; ?>"><button>Editar</button></a>

                            <!-- Delete (POST) -->
                            <form action="./respostaApagarCandidato.php" method="POST" style="display:inline;" onsubmit="return confirm('Deseja realmente apagar este candidato?');">
                                <input type="hidden" name="id_candidato" value="<?php echo $candidato['id_candidato']; ?>">
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
