<?php
$conexion = mysqli_connect('localhost', 'root', '', 'peli');
// Check connection
if ($conexion->connect_error) {
    die("Conexion fallida, archivo votos.php: " . $conn->connect_error);
}
$consPel = $conexion->query("SELECT pelicula, COUNT(pelicula) AS votos FROM pref GROUP BY pelicula");
$consAct = $conexion->query("SELECT actor, COUNT(actor) AS votos FROM pref GROUP BY actor");
$conexion->close();

// Convertir los resultados a arrays
$peliAr = array();
while ($row = $consPel->fetch_assoc()) {
    $peliAr[] = $row;
}

$actorAr = array();
while ($row = $consAct->fetch_assoc()) {
    $actorAr[] = $row;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ayuda</title>
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css">
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
        <h1>Graph Example</h1>
        <div class="grafica">
            <canvas id="pelicula-chart"></canvas>
        </div>
        <div class="grafica">
            <canvas id="actor-chart"></canvas>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- agregamos la libreria -->
    <script>
        // Pelicula chart
        var peliculaChart = document.getElementById('pelicula-chart').getContext('2d');
        new Chart(peliculaChart, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    foreach ($peliAr as $row) {
                        echo "'" . $row['pelicula'] . "', ";
                    }
                    ?>
                ],
                datasets: [{
                    label: 'Votos',
                    data: [
                        <?php
                        foreach ($peliAr as $row) {
                            echo round($row['votos']) . ", ";  //intente redondear a entero pero no puede, ni ocon intval, floor, round
                        }               //por un cosito que este mal ya no se muestra la grafica
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 3
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                fontColor: '#fff',
            }
        });



        // Actor chart
        var actorChart = document.getElementById('actor-chart').getContext('2d');
        new Chart(actorChart, {
            type: 'bar',
            data: {
                labels: [
                    <?php
                    foreach ($actorAr as $row) {
                        echo "'" . $row['actor'] . "', ";
                    }
                    ?>
                ],
                datasets: [{
                    label: 'Votos',
                    data: [
                        <?php
                        foreach ($actorAr as $row) {
                            echo floor($row['votos']) . ", ";
                        }
                        ?>
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        ' rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 3
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                fontColor: '#fff',
            }
        });
    </script>
</body>

</html>