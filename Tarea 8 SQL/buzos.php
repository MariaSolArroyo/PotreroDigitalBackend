<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Buzos en Stock</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap');
      body{
        background-color: #F4E5E1;

      }


      .navbar{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        width:100%;
        background-color: #F3A5B3
    }
    h1{
      font-family: 'Playfair Display', serif;
      font-weight: 800;
      color: #202124;

    }
      .titulo{

      }

      .ropa{
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 20px;
      }
      .botoninicio{
        background-color: transparent;
        margin: 10px;
        border-radius: 10px;
        padding: 4px 10px;
        border: 2px solid #F3A5B3;
        font-size: 0.8rem;
        font-family: 'Raleway', sans-serif;
        font-weight: 500;

      }

      .botoninicio:hover{
        font-size: 1rem;
        background-color: #f3a5b3;
        text-decoration: none;
        color: #202124;

      }

      .enlacebotones{
        text-decoration: none;
        color: #202124;
      }
      .enlacebotones:hover{
        color: #202124;

      }

      .textoytabla{
        padding: 10PX;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }

      .tabla{
        background-color: #D6B9AE;
        margin-top: 10px;
        padding: 5px;
        border-radius: 5px;

        }


        td{
          padding: 10px;

        }
        th{
          padding: 5px 20px;
          border: 0.5px solid;
          background: #F7C9CC;

        }
        .tablados{
          border:1px solid #F7C9CC;
        }

        .botonbuzos{
          background-color: #F3A5B3;

        }

    </style>
  </head>

  <body>
      <nav class="navbar">
        <h1 class="titulo">TIENDA DE ROPA <i class="bi bi-bag-heart"></i> </h1>
      </nav>
      <section class="ropa">
        <button class="botoninicio" type="submit" name="inicio"> <a class="enlacebotones" href="index.html">Inicio</a> </button>
        <button class="botoninicio" type="submit" name="listar"> <a class="enlacebotones" href="listar.php">Lista de Productos</a> </button>
        <button class="botoninicio" type="submit" name="Agregar Ropa" > <a class="enlacebotones" href="index.html">Agregar Ropa</a> </button>
        <button class="botoninicio botonbuzos" type="submit" name="buzos"> <a class="enlacebotones" href="buzos.php">Buzos</a> </button>
        <button class="botoninicio" type="submit" name="nike"> <a class="enlacebotones" href="nike.php">Productos Nike</a> </button>
        <button class="botoninicio" type="submit" name="preciomayor"> <a class="enlacebotones" href="preciomayor.php">Precios Mayor a 500</a> </button>
      </section>
      <section class="textoytabla">
          <h6>Buzos en stock</h6>
          <table border="1" class="tabla">
            <tr>
              <th class="UNO">ID</th>
              <th class="DOS">TIPO DE PRENDA</th>
              <th class="TRES">MARCA</th>
              <th class="CUATRO">TALLE</th>
              <th class="CINCO">PRECIO</th>
            </tr>


            <?php

              $conexion = mysqli_connect("127.0.0.1","root","");
              mysqli_select_db($conexion,"tiendaderopa");

              $consulta = "SELECT*FROM ropa WHERE tipo = 'buzo' ";

              $datos = mysqli_query($conexion,$consulta);

              while ($reg = mysqli_fetch_array($datos)) {?>
                <tr class="tablados">
                  <td><?php echo $reg['id']; ?> </td>
                  <td><?php echo $reg['tipo']; ?> </td>
                  <td><?php echo $reg['marca']; ?> </td>
                  <td><?php echo $reg['talle']; ?> </td>
                  <td><?php echo $reg['precio']; ?> </td>
                </tr>
              <?php }


             ?>
          </table>

      </section>

  </body>
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>
