<?php

    $servername= "localhost";
    $username= "root";
    $password= "";
    $database= "escuela";

    $conn= mysqli_connect($servername,$username,$password,$database);



    if(!$conn)
    {
        die("Error de Conexión" . mysqli_connect_error());
    }

    echo "Conexión Exitosa";

?>