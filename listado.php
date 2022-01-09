<!-- Importamos la conexión -->
<?php require './php/conexion.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css para usar Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Gestión de Productos - Tema 3</title>
</head>

<body class="bg-agua">
    <h3 class="text-center mt-2 font-weight-bold">Gestión de Productos</h3>

    <div class="container w-75 mt-4">
        <form id="formCrear" method="POST" action="./crear.php">
            <a href="./crear.php">
                <button class="btn btn-success text-left" type="button" name="crear">Crear</button>
            </a>
        </form>

        <table class="table text-white table-dark text-center mt-2">
            <thead>
                <tr>
                    <th class="font-weight-normal" scope="col">Detalle</th>
                    <th class="font-weight-normal" scope="col">Código</th>
                    <th class="font-weight-normal" scope="col">Nombre</th>
                    <th class="font-weight-normal" scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $listado = "select id, nombre from productos order by nombre";
                if (!($resultado = $conProyecto->query($listado))) {
                    die("Error al recuperar los productos" . $conProyecto->error);
                }
                while ($fila = $resultado->fetch(PDO::FETCH_OBJ)) {
                    echo "<tr>";
                    echo "<td><a href='./detalle.php?id={$fila->id}'><button class='btn btn-info text-white' type='button' name='detalle'>Detalle</button></a></td>";
                    echo "<td>{$fila->id}</td>";
                    echo "<td>{$fila->nombre}</td>";
                    echo "<td><button class='btn btn-warning mr-1'>Actualizar</button><a href='./borrar.php?id={$fila->id}'><button class='btn btn-danger'>Borrar</button></a></td>";
                    echo "</tr>";
                }
                //Cerrramos conexiones.
                $conProyecto = null;
                ?>

            </tbody>
        </table>

    </div>
</body>

</html>