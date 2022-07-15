<?php 

require("cnn.php");

$id="88999";
$apellidos="alejandro";
$nombres="ROMERO";
/*
$rsContacto = mysqli_query($cnn,"INSERT INTO personas(identificacion,apellidos,nombres) VALUES('$id','$apellidos','$nombres')");

if ($rsContacto)
{
    $afectados = mysqli_affected_rows($cnn);
    echo "Cantidad de filas afectadas: ".$afectados;
 }
*/

 
//Procedimiento almacenado

$result = $cnn->query("Call insertar('$id','$apellidos','$nombres',@ver)");

if ($result)
{
    $afectados = mysqli_affected_rows($cnn);
    echo "Cantidad de filas afectadas: ".$afectados;
 }

 $rta=$cnn->query("select @ver as mensaje");
 
 $resp = mysqli_fetch_array($rta);
 echo $resp["mensaje"];




mysqli_close($cnn);



?>