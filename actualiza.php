<?php
include('php/conector.php');
if ($conexion->connect_error) {
    die('Hmmmmm esta mal php / actualizar' . $conexion->connect_error);
}

$id_u=$_POST['id_u'];
$nom=$_POST['nomu'];
$peli=$_POST['pel'];
$acto=$_POST['act'];
$opi=$_POST['opi'];

$consulta="UPDATE pref SET nom_u='$nom', pelicula='$peli', actor='$acto', op_u='$opi' where id_u='$id_u'";
$registros=$conexion->query($consulta);

header('location: ayuda.php');

?>