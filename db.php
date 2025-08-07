<?php 

    //Aqui vai criar conexão com o banco de dados
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "crud_basico";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if(!$conn) {
        die("Conexão falhou: " . mysqli_connect_error());
    } else {
        echo "Conexão bem-sucedida!";
    }

?>