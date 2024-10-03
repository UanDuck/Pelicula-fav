<?php
$id_u=$_GET['id_u'];

include('php/conector.php');
if ($conexion->connect_error) {
    die('Hmmmmm esta mal elimina' . $conexion->connect_error);
} 

$consulta=mysqli_query($conexion,"delete from pref where id_u='$id_u'");

header('location: ayuda.php');

?>