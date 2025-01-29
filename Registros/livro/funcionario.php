<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Preencha os campos abaixo : </h1>
    <form action="insert.php">
        <label for="name">Nome Completo</label> <br>
        <input type="text" name="nome_completo" id="nome_completo"> <br>
        <label for="email">Email</label> <br>
        <input type="email" name="email" id="email"> <br>
        <label for="senha">Senha</label> <br>
        <input type="password" name="senha" id="senha"> <br>
        <label for="text">Genero</label> <br>
        <input type="text" name="genero" id="genero"> <br>
        <label for="telefone1">Telefone 1</label> <br>
        <input type="text" name="telefone1" id="telefone1"> <br>
        <label for="telefone2">Telefone 2</label> <br>
        <input type="text" name="telefone2" id="telefone2"> <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>