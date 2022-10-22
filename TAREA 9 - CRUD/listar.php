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
  <section class="textoytabla">
    <h6>La siguiente lista muestra los datos de la ropa actualmente en stock.</h6>
    <table border="1" class="tabla">
      <tr>
        <th class="UNO">ID</th>
        <th class="DOS">TIPO DE PRENDA</th>
        <th class="TRES">MARCA</th>
        <th class="CUATRO">TALLE</th>
        <th class="CINCO">PRECIO</th>
        <th class="SEIS">IMG PRENDA</th>
        <th class="SEIS">EDITAR</th>
        <th class="SEIS">BORRAR</th>
      </tr>


      <?php

      $conexion = mysqli_connect("127.0.0.1", "root", "");
      mysqli_select_db($conexion, "tiendaderopa");

      $consulta = "SELECT * FROM ropa";

      $datos = mysqli_query($conexion, $consulta);

      while ($reg = mysqli_fetch_array($datos)) { ?>
      
        <tr class="tablados">
          <td class="id"><?php echo $reg['id']; ?> </td>
          <td><?php echo $reg['tipo']; ?> </td>
          <td><?php echo $reg['marca']; ?> </td>
          <td><?php echo $reg['talle']; ?> </td>
          <td><?php echo $reg['precio']; ?> </td>
          <td><img src="data:image/png;base64,<?php echo base64_encode($reg['imagen']) ?>" alt="" width="100px" height="100px"></td>
          <td><a  href="modificar.php?id=<?php echo $reg['id']; ?>">Editar <i class="bi bi-pencil-square"></i></a></td>
          <td ><a  href="borrar.php?id=<?php echo $reg['id']; ?>">Borrar <i class="bi bi-trash"></i></a></td>
        </tr>
      <?php }


      ?>
    </table>

  </section>

</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</html>