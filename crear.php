<?php
require "./php/conexion.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Crear Producto</title>
</head>

<body class="bg-agua">
    <h3 class='text-center mt-2 font-weight-bold'>Crear Producto</h3>
    <form action="./crear.php" method="POST" id="crear">
        <div class="container mt-4">
            <div class="row">
                <div class="col col-lg-6">
                    <label for="nombre">Nombre</label>
                </div>
                <div class="col">
                    <label for="nombreCorto">Nombre Corto</label>
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-6">
                    <input id="nombre" type="text" placeholder="Nombre" class="form-control">
                </div>
                <div class="col">
                    <input id="nombreCorto" type="text" placeholder="Nombre Corto" class="form-control">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col col-lg-6">
                    <label for="precio">Precio (€)</label>
                </div>
                <div class="col">
                    <label for="familia">Familia</label>
                </div>
            </div>

            <div class="row">
                <div class="col col-lg-6">
                    <input id="precio" type="text" placeholder="Precio (€)" class="form-control">
                </div>
                <div class="col">
                    <select name="familia" id="familia" class="form-control">
                        <option value="CAMARA">Cámaras digitales</option>
                        <option value="CONSOL">Consolas</option>
                        <option value="MULTIF">Equipos multifunción</option>
                        <option value="IMPRES">Impresoras</option>
                        <option value="EBOOK">Libros electrónicos</option>
                        <option value="MEMFLA">Memorias flash</option>
                        <option value="NETBOK">Netbooks</option>
                        <option value="ORDENA">Ordenadores</option>
                        <option value="PORTAT">Ordenadores portátiles</option>
                        <option value="MP3">Reproductores MP3</option>
                        <option value="ROUTER">Routers</option>
                        <option value="SAI">Sistemas de alimentación ininterrumpida</option>
                        <option value="SOFTWA">Software</option>
                        <option value="TV">Televisores</option>
                        <option value="VIDEOC">Videocámaras</option>
                    </select>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col col-lg-6">
                    <label for="descripcion">Descripción</label>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col col-lg-6">
                    <textarea name="descripcion" id="descripcion" cols="100" rows="15"></textarea>
                </div>
            </div>

            <div class="row mt-3">
                <button class="btn btn-primary ml-3">Crear</button>
                
                <button class="btn btn-success ml-3" onclick="limpiar()">Limpiar</button>

                <form id="formVolver" method="POST" action="./listado.php">
                    <a href="./listado.php">
                        <button class="btn btn-info ml-3" type="button" name="volver">Volver</button>
                    </a>
                </form>
            </div>

        </div>

    </form>
    <?php
    if (isset($_POST["crear"])) {
        echo "";
        echo 'holiiii';
    }
    ?>
</body>

<script type="text/javascript">
    function limpiar() {
        var t = document.getElementsByTagName("input");
        for (var i = 0; i < t.length; i++) {
            t[i].value = "";
        }
    }
</script>

</html>