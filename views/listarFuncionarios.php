<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Funcionários</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { color: #333; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        .ativo { color: green; font-weight: bold; }
        .inativo { color: red; }
    </style>
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
                <?php foreach ($funcionarios as $func): ?>
                <tr>
                    <td><?php echo htmlspecialchars($func['id_funcionario']); ?></td>
                    <td><?php echo htmlspecialchars($func['nome_funcionario'] . ' ' . $func['sobrenome_funcionario']); ?></td>
                    <td><?php echo htmlspecialchars($func['email_funcionario']); ?></td>
                    <td><?php echo htmlspecialchars($func['matricula_funcionario']); ?></td>
                    <td><?php echo htmlspecialchars($func['CPF_funcionario'] ?? 'N/A'); ?></td>
                    <td><?php echo htmlspecialchars($func['data_contratacao_funcionario']); ?></td>
                    <td>
                        <?php echo ($func['ADM_funcionario'] == 1) ? 'Sim' : 'Não'; ?>
                    </td>
                    <td>
                        <?php 
                            if ($func['ativo_funcionario'] == 1) {
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