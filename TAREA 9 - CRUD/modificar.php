<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Lista de Productos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="estilos.css">


</head>

<body>
    <nav class="navbar ">
        <img class="img" src="img/brw.svg" alt="">
        <h1 class="titulo">TIENDA ONLINE </h1>
        <section class="ropa">
            <a class="enlacebotones" href="index.html">Inicio </a><i class="bi bi-chevron-right"></i>
            <a class="enlacebotones" href="listar.php">Productos</a><i class="bi bi-chevron-right"></i>
            <a class="enlacebotones" href="buzos.php">Buzos</a><i class="bi bi-chevron-right"></i>
            <a class="enlacebotones" href="nike.php">Productos Nike</a><i class="bi bi-chevron-right"></i>
            <a class="enlacebotones" href="preciomayor.php">Precios Mayor a 500</a><i class="bi bi-chevron-right"></i>
            <a class="enlacebotones" href="agregar.html">Ingresar Ropa</a><i class="bi bi-chevron-right"></i>
            <a class="enlacebotones agregar" href="index.html">Agregar Al carrito <i class="bi bi-cart-plus"></i></a>
        </section>
    </nav>


    <?php

    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "tiendaderopa");

    $id = $_GET['id'];

    $consulta = "SELECT * FROM ropa WHERE id = $id";
    $respuesta = mysqli_query($conexion, $consulta);
    //convierto datos en array
    $datos = mysqli_fetch_array($respuesta);


    ?>
    <div class="container">

        <?php
        $tipo_prenda = $datos["tipo"];
        $marca = $datos["marca"];
        $talle = $datos["talle"];
        $precio = $datos["precio"];
        $imagen = $datos['imagen'];
        ?>

        <h2>Modificar Stock</h2>
        <p>Ingrese los nuevos datos de la prenda a modificar</p>

        <form id="form" method="POST" action="" enctype="multipart/form-data">

            <div>
                <label class="form-label" for="tipo_prenda">TIPO DE PRENDA</label>
                <input class="form-control" type="text" name="tipo_prenda" placeholder="Tipo de prenda" value="<?php echo "$tipo_prenda"; ?>" >
            </div>
            <div>
                <label for="tipo_prenda">MARCA</label>
                <input class="form-control" type="text" name="marca" placeholder="Marca" value="<?php echo "$marca"; ?>" >
            </div>

            <div>
                <label for="talle">TALLE</label>
                <input class="form-control" type="text" name="talle" placeholder="Talle"  value="<?php echo "$talle"; ?>" >
            </div>


            <div>
                <label for="precio">PRECIO</label>
                <input class="form-control" type="text" name="precio" placeholder="Precio"  value="<?php echo "$precio"; ?>" >
            </div>


            <div class="divimg">
                <label for="imagen"><i class="bi bi-card-image"></i></label>
                <input class="form-control form-control-sm" type="file" name="imagen" placeholder="imagen"  >
            </div>

            <div> <input class="submit" type="submit" name="guardar_cambios" value="Guardar Cambios">
                <button class="submit" type="submit" name="Cancelar" formaction="index.html">Cancelar</button>
            </div>


        </form>

        <?php
        if (array_key_exists('guardar_cambios', $_POST)) {

            $conexion = mysqli_connect("127.0.0.1", "root", "");
                        mysqli_select_db($conexion, "tiendaderopa");

            //DATOS
            $tipo_prenda = $_POST['tipo_prenda'];
            $marca = $_POST['marca'];
            $talle = $_POST['talle'];
            $precio = $_POST['precio'];
            $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

            $consulta = "UPDATE ropa SET tipo ='$tipo_prenda', marca='$marca',talle ='$talle',precio='$precio',imagen='$imagen'
                        WHERE id='$id'";

            mysqli_query($conexion,$consulta);
            header('location: listar.php');

        }
        ?>
    </div>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>