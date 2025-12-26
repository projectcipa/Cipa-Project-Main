<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Candidatos</title>
</head>
<body>
    <form action="./test.php" method="POST" enctype="multipart/form-data">
        <label for="Matricula">Matricula: </label>
        <input type="text" name="Matricula_Candidato" id="Matricula" maxlength="11">
        <br>
        <label for="Setor">Setor: </label>
        <input type="text" name="Setor_Candidato" id="Setor">
        <br>
        <label for="Foto">Foto Do Candidato: </label>
        <input type="file" name="Foto_candidato" id="Foto">
        <br>
        <label for="Numero">Número do candidato: </label>
        <input type="text" name="Numero_candidato" id="Numero">
        <br>
        <!--<label for="Data_registro">Data de registro da candidatura: </label>
        <input type="date" name="Data_registro" id="Data_registro">
        <br>-->
        <label for="Eleição">Eleição vinculada: </label>
        <input type="number" name="Eleicao_vinculada" id="Eleição">
        <br>
        <label for="Cargo">Cargo pretendido na CIPA: </label>
        <select name="Cargo_pretendido" id="Cargo">
            <option value="1">eleito</option>
            <option value="2">suplente</option>
            <option value="3">participante</option>
        </select>
        <br>
        <button>Candidatar-se</button>
    </form>
    <a href='../index.php'>Voltar</a> 
</body>
</html>