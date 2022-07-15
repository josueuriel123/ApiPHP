<?php 
    $servidor="localhost";
    $usuario="root";
    $clave="";
    $base_datos="heroku_e83d849c9f88b59";
    $cnn = new mysqli($servidor,$usuario,$clave,$base_datos);

    if ($cnn->connect_errno) {
        echo "Error: ". $conn->connect_error;
        }

?>