<?php
include('php/conector.php');
if ($conexion->connect_error) {
    die('Hmmmmm esta mal' . $conexion->connect_error);
} else {


    $nom=$_POST['nombre'];
    $pel=$_POST['peli'];
    $act=$_POST['actor'];
    $opinion = $_POST["opinion"];
    if ($opinion == '' || $opinion == null || $opinion == 'Maximo 255 caracteres') {
        $opinion = 'Sin comentarios';
    }

    if ($opinion == 'Sin comentarios') {
        //Nada ._.
    } else {

        $consulta = "INSERT INTO pref(nom_u, pelicula, actor, op_u) values('$nom','$pel','$act','$opinion')";
        if ($conexion->query($consulta) == true) {;
        } else {
            echo '<div class="resultado">';
            echo "Error: " . $consulta . '<br>' . $conexion->error;
            echo '</div>';
        }
    }

}
$conexion->close();

?>