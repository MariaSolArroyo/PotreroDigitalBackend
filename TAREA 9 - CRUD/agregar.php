<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Tienda de Ropa</title>
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
      <a class="enlacebotones" href="index.html">Inicio </a><i class="bi
          bi-chevron-right"></i>
      <a class="enlacebotones" href="listar.php">Productos</a><i class="bi
          bi-chevron-right"></i>
      <a class="enlacebotones" href="buzos.php">Buzos</a><i class="bi
          bi-chevron-right"></i>
      <a class="enlacebotones" href="nike.php">Productos Nike</a><i class="bi
          bi-chevron-right"></i>
      <a class="enlacebotones" href="preciomayor.php">Precios Mayor a 500</a><i class="bi bi-chevron-right"></i>
      <a class="enlacebotones" href="agregar.html">Ingresar Ropa</a><i class="bi bi-chevron-right"></i>
      <a class="enlacebotones agregar" href="index.html">Agregar Al carrito <i class="bi bi-cart-plus"></i></a>
    </section>
  </nav>

  <div class="container">
  </div>

  <?php 

      //conexión
      $conexion = mysqli_connect("127.0.0.1","root","");
      mysqli_select_db($conexion,"tiendaderopa");

      // Almacenar los datos del envío POST
      $tipo_prenda = $_POST['tipo_prenda'];
      $marca = $_POST['marca'];
      $talle = $_POST['talle'];
      $precio = $_POST['precio'];

      $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

      // Preparar la orden SQL
      $consulta = "INSERT INTO ropa (id,tipo,marca,talle,precio,imagen)
                    VALUES ('','$tipo_prenda','$marca','$talle','$precio','$imagen')";

      // Ejecutar la orden e ingresar datos
        mysqli_query($conexion,$consulta);
      //Redirijo a index cuando cargó
        header('location: agregar.html');

  
  ?>



</body>

</html>