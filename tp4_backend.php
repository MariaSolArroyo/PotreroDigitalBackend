<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tp4</title>
    <style media="screen">
      .container{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        }

        .row{
          display: flex;
          justify-content: flex-start;
          align-items: flex-start;
          flex-direction: row;
        }

        .ej1,.ej4{
          background-color: #AEC5EB;
          padding: 15px 10px;
          margin: 10px;

        }
        .ej2,.ej5{
          background-color: #EDAFB8;
          padding: 15px 10px;
          margin: 10px;

        }
        .ej3,.ej6{
          background-color: #F6E0D8;
          padding: 15px 10px;
          margin: 10px;

        }

        h1{
          background-color: #DEDBD2;
          width: 100%;
        }


    </style>
  </head>
  <body>
    <div class="container">
      <h1>Estructuras de control</h1>

      <div class="row">
        <div class="ej1">
          <h6>NÚMEROS DEL 1 AL 100</h6>
          <?php
              $i =1;
            do{
              print  "<p>$i </p> \n";
              $i++;
            }
            while ($i <= 100);
          ?>
        </div>
        <div class="ej2">
          <h6>NÚMEROS DEL 100 AL 1</h6>
          <?php


            for ($i=100; $i>0 ; $i--) {
              print  "<p>$i </p> \n";
            }
           ?>
        </div>

        <div class="ej3">
          <h6>NÚMEROS PARES DEL 1 AL 100</h6>
          <?php
          $i=1;

          while ($i <=100) {
            if ($i%2 == 0) {
              print  "<p>$i </p> \n";
            }
            $i++;
          }
           ?>
        </div>
        <div class="ej4">
          <h6>NÚMEROS IMPARES DEL 1 AL 100</h6>
          <?php
          $i=1;

          while ($i <=100) {
            if ($i%2 != 0) {
              print  "<p>$i </p> \n";
            }
            $i = $i +2;
          }

           ?>
        </div>

        <div class="ej5">
          <h6>SUMA DE LOS NUMEROS DEL 1 AL 20</h6>
          <?php
          $suma=0;
          for ($i=1; $i <=20 ; $i++) {
            $suma = $suma + $i;

          }
          print  "<h2>$suma </h2> \n";

           ?>
        </div>

        <div class="ej6">
          <h6>SUMA DE LOS NUMEROS PARES DEL 1 AL 20:</h6>
          <?php
          $suma=0;
          for ($i=1; $i <=20 ; $i++) {
            if ($i%2==0){

              $suma = $suma + $i;
            }
          }
          print  "<h2>$suma </h2> \n";

           ?>
        </div>
      </div>
    </div>
  </body>
</html>
