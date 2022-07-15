<?php 
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $base_datos="empleados";
    $cnn = new mysqli($servidor,$usuario,$clave,$base_datos);

    if ($cnn->connect_errno) {
        echo "Error: ". $conn->connect_error;
        }

?>