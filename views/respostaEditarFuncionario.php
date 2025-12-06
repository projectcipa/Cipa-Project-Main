<?php
    require_once __DIR__ . "/../controllers/FuncionarioController.php";
    // mostrar erros durante depuração (tirar depois )
    ini_set('display_errors', '0');
    error_reporting(E_ALL);

    $controller = new FuncionarioController();

    try {
        $success = $controller->edit($_SERVER["REQUEST_METHOD"]);
    } catch (Throwable $e) {
        error_log("respostaEditarFuncionario: exceção ao chamar edit: " . $e->getMessage());
        $success = false;
    }

    if ($success) {
        echo("<h1 align='center'>Funcionário atualizado com sucesso!</h1>");
    } else {
        // nstrução para checar log
        error_log("Falha ao atualizar funcionário. POST: " . print_r($_POST, true));
        echo("<h1 align='center'>Falha ao atualizar funcionário. Verifique o log: /opt/lampp/logs/php_error_log</h1>");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/cadastrarFuncionarios.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status da Edição</title>
</head>
<body>
    <a href='./listarFuncionarios.php'><button>Voltar para a Lista</button></a>
    <a href='./editarFuncionario.php?id=<?php echo isset($_POST['id_funcionario']) ? intval($_POST['id_funcionario']) : ''; ?>'><button>Editar Novamente</button></a>
    <a href='../index.php'><button>Voltar para a Página Inicial</button></a>
</body>
</html>