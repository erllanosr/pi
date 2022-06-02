<?php
//include();
require("../php/conexion.php"); // Es normal usar dos archivos distintos.

//echo "PRUEBA 1";
// Vamos a trasladar mediante el uso de variables los valores que nos va a enviar el formulario

$instruccion_SQL = "INSERT INTO registro (nombre, edad, sexo, objetivo, peso_actual, peso_deseado, actividad, disponibilidad) VALUES ('" . $_GET['correo'] . "','" . $_GET['clave'] . "')";

//echo "mysqli_error(mysqli $instruccion_SQL)";

//echo "PRUEBA 2";

$resultado = mysqli_query($conexion, $instruccion_SQL);
if ($resultado == FALSE) {
  echo "Error en la consulta.";
} else {
  //header('Location: http://localhost/crud/htmlArchivos/index.html');
  //die();
  echo "<html>";
  echo "<head>";
  echo "<meta http-equiv='Refresh' content=1;url='../cuestionario.html'>";
  echo "</head>";
  echo "<body>";
  //echo "<p>Registro guardado correctamente.</p>";
  //echo "Serás redirigido a la página principal en 3 segundos...<br><br>";
  echo "</body>";
  echo "</html>";
}

mysqli_close($conexion);
