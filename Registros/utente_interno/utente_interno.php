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
    <h1>CARO UTENTE ! <br> <br> Preencha os campos abaixo : </h1>
    <form action="insert.php">
     
        <input type="text" placeholder="Nome Completo" name="nome_completo" id="nome_completo" > <br>
     
        <input type="email" placeholder="Email" name="email" id="email"> <br>
     
        <input type="text" placeholder="Endereco fisico" name="endereco" id="endereco"> <br>
       
        <input type="text" placeholder="Genero" name="genero" id="genero"> <br>

      
        <input type="text" placeholder="Telefone 1" name="telefone1" id="telefone1"> <br>
       
        <input type="text" placeholder="Telefone 2" name="telefone2" id="telefone2"> <br>
        
       
        <input type="text" placeholder="Numero de Cartao" name="numero_cartao" id="numero_cartao"> <br>
      
        <input type="text" placeholder="Departamento" name="departamento" id="departamento"> <br>
        
        <input type="text" placeholder="Tipo" name="tipo" id="tipo"> <br>
       
        <input type="text" placeholder="Numero do Estudante" name="numero_estudante" id="numero_estudante"> <br>
        
        <input id="but" type="submit" value="Submit">
    </form>
    </div>
</body>
</html>