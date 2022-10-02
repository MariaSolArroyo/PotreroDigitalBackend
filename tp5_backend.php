<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tarea N°5</title>
    <style media="screen">

      .row{
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
      }

      .nump{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      }


      .ej1{
        background-color: #F4F27B;
        width: 50%;
        margin: 10px 10px;
        padding: 50px;
      }
        .ej2{
          background-color: #BBD0D8;
          width: 50%;
          margin: 10px 10px;
          padding: 50px;

        }
          .ej3{
            background-color: #DACAF6;
            width: 50%;
            margin: 10px 10px;
            padding: 50px;

          }
            .ej4{
              background-color: #E5E5E5;
              width: 50%;
              margin: 10px 10px;
              padding: 50px;

            }
              .ej5{
                background-color: #F4F27B;
                width: 50%;
                margin: 10px 10px;
                padding: 50px;

              }
              h3{
                background-color: #8f8f8f;
                padding: 10px;
                margin: 0;
              }

              .ej2 h3{
                margin-bottom: 15px;
              }
    </style>


  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="ej1">
                  <h3>Primeros 10 números pares</h3>
                  <div class="nump">


                  <?php
                      $numpares = [2,4,6,8,10,12,14,16,18,20];
                      foreach ($numpares as $valor) {
                         print "<p>$valor</p> \n";
                      }
                   ?>
                   </div>
            </div>
            <div class="ej2">
                  <h3>Array con valores</h3>
                  <div class="arrayv">


                  <?php
                      $valores = ["Pedro","Ana",34,1,10];
                         print_r ($valores);
                   ?>
                   </div>
            </div>
            <div class="ej3">
                  <h3>Array Asociativo</h3>
                  <div class="arrayasoc">


                  <?php
                      $asociativo = [
                        'Nombre' => "Pedro",
                        'Apellido' => "Torres",
                        'Direccion' => "Av. Mayor 3703",
                        'Teléfono' => 1122334455,
                      ];

                      foreach ($asociativo as $asoc => $value) {
                        print "<p>$value</p>\n";
                      }

                   ?>
                   </div>
            </div>

            <div class="ej4">
                  <h3>Array de Ciudades</h3>
                  <div class="arrayciudades">
                  <?php
                      $indice =0;
                      $ciudades = ["Madrid","Barcelona","Londres","New York","Los Ángeles","Chicago"];
                         foreach ($ciudades as $ciu) {
                           print "<p>La ciudad con índice $indice tiene el nombre <strong> $ciu </strong></p>\n";
                           $indice++;
                         }
                   ?>
                   </div>
            </div>

            <div class="ej5">
                  <h3>Array de Ciudades con índice</h3>
                  <div class="arrayciudadconindice">
                  <?php
                      $indice =0;
                      $ciudadesconindices = [
                        'MD'=>"Madrid",
                        'BCL'=>"Barcelona",
                        'LD'=>"Londres",
                        'NY'=>"New York",
                        'LA'=>"Los Ángeles",
                        'CCG'=>"Chicago"];
                         foreach ($ciudadesconindices as $indice =>$valor) {
                           print "<p>El índice de $valor es <strong> $indice </strong></p>\n";
                           $indice++;
                         }
                   ?>
                   </div>
            </div>


        </div>
    </div>



  </body>
</html>
