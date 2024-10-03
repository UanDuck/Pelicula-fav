<?php
include('php/conector.php');
if ($conexion->connect_error) {
    die('Hmmmmm esta mal actualizar' . $conexion->connect_error);
}

$id_u = $_GET['id_u'];

$consulta = "select id_u, nom_u, pelicula, actor, op_u from pref where id_u=$id_u";
$registros = $conexion->query($consulta);
$reg = mysqli_fetch_array($registros);
$nombrec = $reg['nom_u'];
$pelicu = $reg['pelicula'];
$actorc = $reg['actor'];
$opinion = $reg['op_u'];
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/ayud.css">
</head>

<body>
    <nav>
    <div class="all-nav">
            <div class="links">
                <a href="index.php">Inicio</a>
                <a href="buscar.php">Buscar</a>
                <a href="ayuda.php">Ayuda Eliminar/Actualizar</a>
            </div>
        </div>
    </nav>

    <div class="full">
        <h1>Editar</h1>
        <div class="formulario">
            <form action="actualiza.php" method="post">
                <input type="hidden" name="id_u" value="<?php echo $id_u; ?>"><br><br>

                <label for="">Escribe tu Nombre</label>
                <input type="text" max="50" name="nomu" <?php echo "value='$nombrec'"; ?>><br><br><br>

                <label>¿Qué Pelicula prefieres?</label><br>
                <select name="pel">
                    <option value="El niño con el pijama de rayas" <?php if ($pelicu == "El niño con el pijama de rayas") { echo 'selected'; } ?><?php if ($pelicu == "hola") { echo 'selected'; } ?>>El niño con el pijama de rayas</option>
                    <option value="Tocando el viento" <?php if ($pelicu == "Tocando el viento") { echo 'selected'; } ?>>Tocando el viento</option>
                    <option value="brassed off: a film script" <?php if ($pelicu == "brassed off: a film script") { echo 'selected'; } ?>>brassed off: a film script</option>
                    <option value="Florece la esperanza" <?php if ($pelicu == "Florece la esperanza") { echo 'selected'; } ?>>Florece la esperanza</option>
                    <option value="Unusual Ground Floor Conversion" <?php if ($pelicu == "Unusual Ground Floor Conversion") { echo 'selected'; } ?>>Unusual Ground Floor Conversion</option>
                    <option value="Blame It on The Belboy" <?php if ($pelicu == "Blame It on The Belboy") { echo 'selected'; } ?>>Blame It on The Belboy</option>
                    <option value="¡Que pasada!" <?php if ($pelicu == "¡Que pasada!") { echo 'selected'; } ?>>¡Que pasada!</option>
                    <option value="Purely Belter" <?php if ($pelicu == "Purely Belter") { echo 'selected'; } ?>>Purely Belter</option>
                    <option value="C.B.D. The comic book diaries" <?php if ($pelicu == "C.B.D. The comic book diaries") { echo 'selected'; } ?>>C.B.D. The comic book diaries</option>
                    <option value="Marijuanos" <?php if ($pelicu == "Marijuanos") { echo 'selected'; } ?>>Marijuanos</option>
                    <option value="Friendship Beyond the Fence" <?php if ($pelicu == "Friendship Beyond the Fence") { echo 'selected'; } ?>>Friendship Beyond the Fence</option>
                    <option value="Little Voice" <?php if ($pelicu == "Little Voice") { echo 'selected'; } ?>>Little Voice</option>
                    <option value="See you at wembley, frankie walsh" <?php if ($pelicu == "See you at wembley, frankie walsh") { echo 'selected'; } ?>>See you at wembley, frankie walsh</option>
                    <option value="A Kick in the Grass" <?php if ($pelicu == "A Kick in the Grass") { echo 'selected'; } ?>>A Kick in the Grass</option>
                </select><br><br><br>

                <label>¿Qué actor prefieres?</label><br>
                <select name="act" id="">
                    <option value="Jack Scanlon (Shmuel)"                 <?php if ($actorc == "Jack Scanlon (Shmuel)") { echo 'selected'; } ?> >Jack Scanlon (Shmuel)</option>
                    <option value="Asa Butterfield (Bruno)"                 <?php if ($actorc == "Asa Butterfield (Bruno)") { echo 'selected'; } ?> >Asa Butterfield (Bruno)</option>
                    <option value="David Thewelis (Ralf)"                 <?php if ($actorc == "David Thewelis (Ralf)") { echo 'selected'; } ?> >David Thewelis (Ralf)</option>
                    <option value="Rupert Friend (Kurt Kothler)"                 <?php if ($actorc == "Rupert Friend (Kurt Kothler)") { echo 'selected'; } ?> >Rupert Friend (Kurt Kothler)</option>
                    <option value="Amber Beattie (Gretel)"                 <?php if ($actorc == "Amber Beattie (Gretel)") { echo 'selected'; } ?> >Amber Beattie (Gretel)</option>
                    <option value="Vera Farmiga (Elsa)"                 <?php if ($actorc == "Vera Farmiga (Elsa)") { echo 'selected'; } ?> >Vera Farmiga (Elsa)</option>
                </select><br><br><br>

                <label for="">Comentario:</label><br>
                <textarea id="opinion" name="opi" rows="5" cols="40" maxlength="255" value=""><?php echo $opinion ?></textarea>  <br><br><br>

                <input type="submit" value="Guardar">
            </form>
        </div>

    </div>
</body>

</html>