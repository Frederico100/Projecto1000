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
    <h1>CARO FUNCIONARIO ! <br> <br> Preencha os campos abaixo : </h1>
    <form action="insert.php">
     
        <input type="text" placeholder="Funcionario" name="funcionario" id="funcionario" > <br>

        <input type="text" placeholder="Utente" name="utente" id="utente" > <br>
     
        <input type="text" placeholder="Numero de Registro Interno" name="num_reg_int" id="num_reg_int"> <br>
     
        <input type="text" placeholder="Cutter" name="cutter" id="cutter"> <br>
    
        <input id="but" type="submit" value="Submit">
    </form>
    </div>
</body>
</html>