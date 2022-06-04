<?php
//include();
require("./conexion.php"); // Es normal usar dos archivos distintos.

//echo "PRUEBA 1";
// Vamos a trasladar mediante el uso de variables los valores que nos va a enviar el formulario

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];
$instruccion_SQL = "INSERT INTO `comentarios` (nombre, correo, comentario) VALUES ('$nombre','$correo','$comentario')";

//echo "PRUEBA 2";
//echo "mysqli_error(mysqli $instruccion_SQL)";

$resultado = mysqli_query($conexion, $instruccion_SQL);
//echo "PRUEBA 3";
if ($resultado == FALSE) {
  echo "Error en la consulta.";
} else {
  //header('Location: http://localhost/pi/index.html');
  //die();
  echo "<html>";
  echo "<head>";
  echo "<meta http-equiv='Refresh' content=0;url='http://localhost/pi/comentario_enviado.html'>";
  echo "</head>";
  echo "<body>";
  //echo "<p>Comentario enviado.</p>";
  //header('Location: http://localhost/pi/comentario_enviado.html');
  //echo "Serás redirigido a la página principal en 3 segundos...<br><br>";
  echo "</body>";
  echo "</html>";
}

mysqli_close($conexion);
