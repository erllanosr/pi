<?php
$correo = $_POST['correo'];
$clave = $_POST['clave'];

echo "Pruebas 1";
session_start();
$_SESSION['correo'] = $correo;

echo "PRUEBAS 2";
include("./php/conexion.php");

echo "PRUEBAS 3";

$instruccion_SQL = "SELECT * FROM registro WHERE correo='$correo' and clave='$clave'";

echo "PRUEBAS 4";

$resultado = mysqli_query($conexion, $instruccion_SQL);

echo "pruebas 5";

$filas = mysqli_num_rows($resultado);

echo "PRUEBAS 6";

if ($filas) {
  header("location: http://localhost/pi/home.html");
} else {
  //echo "Error en la consulta.";
  header("Location: http://localhost/pi/login_incorrecto.html");
}
mysqli_free_result($resultado);
mysqli_close($conexion);
