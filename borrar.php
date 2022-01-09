<link rel="stylesheet" href="./css/styles.css">
<?php
require './php/conexion.php';

$id = $_GET['id'];
$registro = $conProyecto->query("DELETE FROM productos WHERE id=$id");
if ($registro) {
    echo "<div class='textoBorrado'>";
    echo "<h3><strong>Producto de Código: $id Borrado correctamente. </strong></h3>";
    echo "<form id='formVolver' method='POST' action='./listado.php'>";
    echo "<a href='./listado.php'>";
    echo "<button class='botonVolverBorrado' type='button' name='volver'>Volver</button>";
    echo "</a></form>";
    echo "</div>";
}

cerrarConexion();
