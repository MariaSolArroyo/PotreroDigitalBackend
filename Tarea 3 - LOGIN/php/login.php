<?php
  $usuario = $_POST["u"];
  $contrasenia = $_POST["p"];

$checkuser = "admin";
$checkpass = "43210";

if (($usuario == $checkuser)&&($contrasenia == $checkpass)){
  header("location:../html/ingresocorrecto.html");
} else {
  header("location:../html/error.html");
}

 ?>
