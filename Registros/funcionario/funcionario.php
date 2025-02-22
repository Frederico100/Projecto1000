<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estiloGerais/estiloForm.css">

    <title>Document</title>
</head>
<body>
    <div id="center">

    <h1>CARO Funcionario ! <br> <br> Preencha os campos abaixo : </h1>
    
    <form action="insert.php">
        
        <input type="text" placeholder="Nome Completo" name="nome_completo" id="nome_completo"> <br>
     
        <input type="email" placeholder="Email" name="email" id="email"> <br>
        
        <input type="password" placeholder="Senha" name="senha" id="senha"> <br>
      
        <input type="text" placeholder="Genero" name="genero" id="genero"> <br>
        
        <input type="text"placeholder="Telefone 1" name="telefone1" id="telefone1"> <br>
      
        <input type="text" placeholder="Telefone 2" name="telefone2" id="telefone2"> <br>
        
        <input id="but" type="submit" value="Submit">
    </form>

    </div>    
</body>
</html>