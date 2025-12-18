<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Documento</title>
    <link rel="stylesheet" href="../css/cadastrarFuncionarios.css">
</head>
<body>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label for="data_hora_documento">Data do Documento: </label>
        <input type="date" name="data_hora_documento" id="data_hora_documento">
        <br>
        <label for="data_inicio_documento">Data de Inicio: </label>
        <input type="date" name="data_inicio_documento" id="data_inicio_documento">
        <br>
        <label for="data_fim_documento">Data de Fim: </label>
        <input type="date" name="data_fim_documento" id="data_fim_documento">
        <br>
        <label for="observacao_documento">Observação Documento: </label>
        <input type="text" name="observacao_documento" id="observacao_documento" placeholder="Alguma Observação?">
        <br>
        <label for="pdf_documento">PDF documento: </label>
        <input type="file" name="pdf_documento" id="pdf_documento">
        <br>
        <label for="titulo_documento">Titulo: </label>
        <input type="text" name="titulo_documento" id="titulo_documento" placeholder="D">
        <br>
        <label for="tipo_documento">Tipo do Documento: </label>
        <select name="tipo_documento" id="tipo_documentotipo_documento">
            <option value=1 >EDITAL</option>
            <option value=2 >ATA</option>
        </select>
        <br>
        <button>Subir arquivo</button>
    </form>
    <a href='../index.php'>Voltar</a> 
</body>
</html>