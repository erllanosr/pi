<?php
//include();
require("./conexion.php"); // Es normal usar dos archivos distintos.

//echo "PRUEBA 1";
// Vamos a trasladar mediante el uso de variables los valores que nos va a enviar el formulario

$correo = $_POST['correo'];
$clave = $_POST['clave'];
$instruccion_SQL = "INSERT INTO `registros` (correo, clave) VALUES ('$correo','$clave')";

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
  echo "<meta http-equiv='Refresh' content=1;url='http://localhost/pi/index.html'>";
  echo "</head>";
  echo "<body>";
  //echo "<p>Registro guardado correctamente.</p>";
  //echo "Serás redirigido a la página principal en 3 segundos...<br><br>";
  echo "</body>";
  echo "</html>";
}

mysqli_close($conexion);
