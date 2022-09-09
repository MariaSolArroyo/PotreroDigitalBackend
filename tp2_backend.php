<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tarea 3</title>
  </head>
  <body>
    <?php
    $n = 3;
    $n2 = 1;
    $n3 = 20;
    $numero1 = 5;
    $numero2 = 23;
     ?>

     <h3>Punto 1</h3>
     <?php
     if ($n > 0) {
       echo "$n es mayor a 0";
     }
     else {
       echo "La variable es menor o igual a 0";
     }
      ?>
      <hr>

      <h3>Punto 2</h3>
      <?php
      if (($n2 > 1)&&($n2 < 10)) {
        echo "$n2 es mayor que 1 y menor a 10";
      } else {
        echo "La variable es menor o igual a 1 o mayor a 10";
      }
       ?>
       <hr>

       <h3>Punto 3</h3>
       <?php
       if (($n3 > 10)||($n3 < 2)){
         echo "la variable es mayor a 10 o menor a 2";
       } else {
         echo "$n3 se encuentra entre 2 y 10 ";
       }
        ?>
        <hr>

        <h3>Punto 4</h3>
        <?php
          if ($numero1 > $numero2) {
            $suma = $numero1 + $numero2;
            $resta = $numero1 - $numero2;
            echo "La suma de $numero1 y $numero2 es: $suma | La resta de $numero1 y $numero2 es: $resta";
          } elseif ($numero2 > $numero1) {
            $multiplicacion = $numero1*$numero2;
            $division = $numero2/$numero1;
            $resto = $numero2%$numero1;

            echo "Multiplicacion de $numero2 x $numero1 es: $multiplicacion . | ";
            echo "División de $numero2 x $numero1 es: $division . | ";
            echo "El resto de dividir $numero2 con $numero1 es: $resto .";
          }elseif ($numero1 == $numero2) {
            echo "Los números ingresados son iguales";
          }



         ?>
  </body>
</html>
