<?php

    include 'Conexion.php';

    echo "<br>";

    $nombre = empty($POST['nombre']) ? "":$POST['nombre'];
    $PrimApellido = empty($POST['Papellido']) ? "":$POST['Papellido'];
    $SegApellido = empty($POST['Sapellido']) ? "":$POST['Sapellido'];
    $Grado = empty($POST['grado']) ? "":$POST['grado'];
    $Domicilio = empty($POST['domicilio']) ? "":$POST['domicilio'];
    $Telefono = empty($POST['telefono']) ? "":$POST['telefono'];


    $sql= "insert into alumnos(Nombre,PApellido,SApellido,Grado,Domicilio,Telefono)
           values('$nombre','$PrimApellido','$SegApellido','$Grado','$Domicilio','$Telefono');";
    if(mysqli_query($conn, $sql))
    {
        echo $nombre ."  ". $PrimApellido." Tu registro fue exitoso";
    }
    else
    {
        echo "Error en el registro ". $sql ."<br>". mysqli_connect_error($conn);
    }

    mysqli_close($conn);

    

?>