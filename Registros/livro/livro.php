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
    <h1> Preencha os campos abaixo mediante o Livro </h1>
    <form action="insert.php">
     
        <input type="number" placeholder="Numero de Registro Interno" name="num_reg_interno" id="num_reg_intern" > <br>

        
        <input type="text" placeholder="Autor" name="autor" id="autor"> <br>
     
        <input type="text" placeholder="Categoria" name="categoria" id="categoria"> <br>
       
        <input type="number" placeholder="Ano" name="ano" id="ano"> <br>

        <input type="text" placeholder="Titulo" name="titulo" id="titulo"> <br>
        
        <input type="number" placeholder="ISBN" name="isbn" id="isbn"> <br>
     
        <input type="text" placeholder="Cutter" name="cutter" id="cutter"> <br>
       
        <input type="number" placeholder="Edicao" name="edicao" id="edicao"> <br>

      
        <input type="number" placeholder="Volume" name="volume" id="volume"> <br>
       
        
        <input id="but" type="submit" value="Submit">
    </form>
    </div>
</body>
</html>