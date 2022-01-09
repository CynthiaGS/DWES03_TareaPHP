<!-- Importamos la conexión -->
<?php require './php/conexion.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Detalle Producto</title>
</head>

<body class="bg-agua">
    <h3 class="text-center mt-2 font-weight-bold">Detalle Producto</h3>

    <div class="container">
        <div class="card text-white bg-info mb-3" style="max-width: 70rem;">

            <?php
            $id = $_GET['id'];

            $detalle = "select nombre, nombre_corto, pvp, familia, descripcion from productos where id=$id";
            if (!($resultado = $conProyecto->query($detalle))) {
                die("Error al recuperar los productos" . $conProyecto->error);
            }
            while ($detalleEncontrado = $resultado->fetch_assoc()) {
                echo "<div class='card-header text-center'>{$detalleEncontrado['nombre']}</div>";
                echo "<div class='card-body'>";
                echo "<h4  class='text-center'>Código: {$id}</h4>";
                echo "<p class='card-text'>Nombre: {$detalleEncontrado['nombre']}</p>";
                echo "<p class='card-text'>Nombre Corto: {$detalleEncontrado['nombre_corto']}</p>";
                echo "<p class='card-text'>Código Familia: {$detalleEncontrado['familia']}</p>";
                echo "<p class='card-text'>PVP (€): {$detalleEncontrado['pvp']}</p>";
                echo "<p class='card-text'>Descripción: {$detalleEncontrado['descripcion']}</p>";
                echo "</div>";
            }
            cerrarConexion();
            ?>

        </div>

    </div>

    <div class="col text-center">
        <form id="formVolver" method="POST" action="./listado.php">
            <a href="./listado.php">
                <button class="btn btn-info align-center" type="button" name="volver">Volver</button>
            </a>
        </form>
    </div>

</body>

</html>