<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <
        <?php

         //servername => localhost
         //username => root
         //password => root
         //database name => staff
        $conn = mysqli_connect("localhost", "root", "root", "bd_biblioteca");
        
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        // Taking all 5 values from the form data(input)
        $nome =  $_REQUEST['nome_completo'];
        $email = $_REQUEST['email'];
        $endereco = $_REQUEST['endereco'];
        $genero= $_REQUEST['genero'];
        $telefone1 =$_REQUEST['telefone1'];
        $telefone2 = $_REQUEST['telefone2'];
        $numero_cartao = $_REQUEST['numero_cartao'];
        $departamento = $_REQUEST['departamento'];
        $tipo= $_REQUEST['tipo'];

     //   $numero_estudante= $_REQUEST['numero_estudante'];



       
        
        // Performing insert query execution
        // here our table name is college
        $value = 10;
        $sql = "select inserir_utente_interno($value,'$nome','$endereco','$telefone1','$telefone2','$numero_cartao','$departamento','ACTIVO','$tipo')";
   
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

                echo nl2br("\n$email\n $senha\n "
            . "$nome\n $telefone1\n $telefone2 \n $genero");

           
        } else{
            echo nl2br("\n$email\n $senha\n "
            . "$nome\n $telefone1\n $telefone2 \n $genero");
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>

</body>

</html>
