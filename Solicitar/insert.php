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
        $reg_interno =  $_REQUEST['num_reg_interno'];
        $autor = $_REQUEST['autor'];
        $categoria = $_REQUEST['categoria'];
        $ano= $_REQUEST['ano'];
        $titulo =$_REQUEST['titulo'];
        $isbn = $_REQUEST['isbn'];
        $cutter = $_REQUEST['cutter'];
        $edicao = $_REQUEST['edicao'];
        $volume= $_REQUEST['volume'];

     //   $numero_estudante= $_REQUEST['numero_estudante'];



       
        
        // Performing insert query execution
        // here our table name is college
        $value = 10;
        $sql = "select inserir_livro('$reg_interno','$cutter', '$autor', '$categoria', '$ano', '$titulo', '$isbn', '$edicao', '$volume')";
   
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 
/*
                echo nl2br("\n$email\n $senha\n "
            . "$nome\n $telefone1\n $telefone2 \n $genero");*/

           
        } else{
            echo"Eish ! sem sucesso";
            /*
            echo nl2br("\n$email\n $senha\n "
            . "$nome\n $telefone1\n $telefone2 \n $genero");
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn); */
        }
        
        // Close connection
        mysqli_close($conn);
        ?>

</body>

</html>
