<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP 1</title>
</head>

<body>
    <h6>1. Impresión por pantalla</h6>
        <?php
        echo "Hola mundo";
        ?>
        <hr>

    <h6>2. Impresión por pantalla mediante una variable</h6>
        <?php
        $mensaje = "Hola mundo";
        echo $mensaje;
        ?>
        <hr>

    <h6>3. Operaciones con variables</h6>
        <?php
        $variableUno = 10;
        $variableDos = 6;
        ?>
    <p>Variable Uno : 10 </p>
    <p>Variable Dos :6 </p>
    <h6>SUMA:</h6> 
        <?php
        echo "Variable Uno + Variable Dos: ";
        echo $variableUno + $variableDos;
        ?><hr>
    <h6>RESTA</h6>
        <?php
        echo "Variable Uno - Variable Dos: ";
        echo $variableUno - $variableDos;
        ?>
    <hr>
    <h6>MULTIPLICACIÓN</h6>
        <?php
        echo "Variable Uno X Variable Dos: ";
        echo $variableUno*$variableDos;
        ?>
    <hr>
    <h6>DIVISIÓN:</h6>
        <?php
        echo "Variable Uno / Variable Dos: ";
        echo $variableUno/$variableDos;
        ?>
    <hr>
    <h6>RESTO</h6>
        <?php
        echo "Resto de dividir Variable Uno por Variable Dos: ";
        echo $variableUno%$variableDos;
        ?>
    <hr>
    <h6>4. Transformación de 20° Celsius a Fahrenheit </h6>
        <?php
        echo 20*1.8+32;
        ?>
    <hr>
    <h6>5.a) Perimetro y Area de un Rectangulo con base 18cm y altura 12cm </h6>
        <?php
        $base = 18;
        $altura = 12;
        ?>
        <h6>Perimetro:</h6>
        <?php echo "Base X2 + Altura X2 ";?> 
        <br>
        <?php echo "18cm X2 + 12cm X2";?>
        <br>
        <?php echo "= "; echo $base*2+$altura*2; echo "cm"?>

        <h6>Area:</h6>
        <?php echo "Base X Altura ";?> 
        <br>
        <?php echo "18cm X 12cm ";?>
        <br>
        <?php echo "= "; echo $base*$altura; echo "cm2"?>

        <h6>5.b) Perimetro y Area de un Circulo de radio 30cm</h6>
        <?php
            $pi = 3.14;
        ?>
        <h6>Perimetro:</h6>
        <?php echo "Pi x radioX2";?> 
        <br>
        <?php echo "Pi X30cmX2";?>
        <br>
        <?php echo "= "; echo $pi*30*2; echo "cm"?>

        <h6>Area:</h6>
        <?php echo "Pi X radioXradio";?> 
        <br>
        <?php echo "Pi X30cm X 30cm";?>
        <br>
        <?php echo "= "; echo $pi*30*30; echo "cm2"?>







</body>

</html>