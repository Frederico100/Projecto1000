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
        $funcionario =  $_REQUEST['funcionario'];
        $utente = $_REQUEST['utente'];
        $num_reg = $_REQUEST['num_reg_int'];
        $cutter= $_REQUEST['cutter'];
        

     //   $numero_estudante= $_REQUEST['numero_estudante'];



       
        
        // Performing insert query execution
        // here our table name is college
        $value = 10;
        $sql = "select emprestar_exemplar($funcionario,'$utente','$num_reg','$cutter')";
   
        
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully." 
                . " Please browse your localhost php my admin" 
                . " to view the updated data</h3>"; 

             

           
        } else{
           
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        
        // Close connection
        mysqli_close($conn);
        ?>

</body>

</html>
