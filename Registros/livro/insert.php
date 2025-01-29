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
        $senha = $_REQUEST['senha'];
        $telefone1 =$_REQUEST['telefone1'];
        $telefone2 = $_REQUEST['telefone2'];
        $genero= $_REQUEST['genero'];
       
        
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO funcionario(email,senha,nome,telefone1,telefone2,genero)  VALUES"
        . "  ('$email','$senha','$nome','$telefone1','$telefone2','$genero')";
   
        
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
