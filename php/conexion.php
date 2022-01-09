<?php
//hacemos la conexión
$conProyecto = new mysqli('localhost', 'gestor', 'secreto', 'proyecto');
if ($conProyecto->connect_error) {
    die('Error de Conexión (' . $conProyecto->connect_errno . ') ' . $conProyecto->connect_error);
    //die() detiene la ejecución del código php
}

function cerrarConexion() {
    global $conProyecto;
    $conProyecto->close();
}
?>