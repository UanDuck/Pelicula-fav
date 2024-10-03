<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/ayud.css">
</head>

<body>
<input type="checkbox" id="active">
    <label for="active" class="menu-btn"><span></span></label>
    <label for="active" class="close"></label>
    <div class="wrapper">
        <div class="list">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="votos.php">Votos</a></li>
            <li><a href="ayuda.php">Ayuda</a></li>
            <li><a href="ayuda.php">Editar o Eliminar</a></li>
        </ul>
        </div>
    </div>

    <div class="full">
        <h1>Registros</h1>
        <?php
        include("php/conector.php");
        if ($conexion->connect_error) {
            die('Hmmmmm esta mal   ayud.php' . $conexion->connect_error);
        }

        $consulta = "select id_u, nom_u, pelicula, actor, op_u from pref";
        $registros = $conexion->query($consulta);
        echo '<div class="formulario">';
        echo '<table>';
        echo '<tr>';
        echo '<th> </th>';
        echo '<th>' . 'Nombre' . '</th>';
        echo '<th>' . 'Pelicula' . '</th>';
        echo '<th>' . 'Actor' . '</th>';
        echo '<th>' . 'Comentario' . '</th>';
        echo '<th>' . 'Actualizar  Eliminar' . '</th>';
        echo '</tr>';
        while ($reg = mysqli_fetch_array($registros)) {
            $id_u = $reg['id_u'];
            echo '<td>';
            echo '';
            echo '';
            echo '<td>' . $reg['nom_u'] . '</td>';
            echo '<td>' . $reg['pelicula'] . '</td>';
            echo '<td>' . $reg['actor'] . '</td>';
            echo '<td>' . $reg['op_u'] . '</td>';


            echo '<td><a href="actualizar.php?id_u=' . $id_u . '"><img style="height: 33px;" src="img/refresh.png" alt="actualizar"</a>';
            echo "     ";
            echo '<a href="#"  onclick=eliminar(' . $id_u . ')><img style="height: 33px;" src="img/trash.png" alt="delete"</a></td>';
            echo '</tr>';
        }
        echo "</table>";
        echo "</div>";
        ?>
    </div>
</body>
<script type="text/javascript">
    function eliminar(id_u) {
        if (confirm('Estas seguro de eliminar este registro?')) {
            location.href = "elimina.php?id_u=" + id_u;
        }
    }
</script>

</html>