<?php
//include();
require("./conexion.php"); // Es normal usar dos archivos distintos.

//echo "PRUEBA 1";
// Vamos a trasladar mediante el uso de variables los valores que nos va a enviar el formulario

$correo = $_POST['correo'];
$clave = $_POST['clave'];
$nombre = $_POST[''];
$edad = $_POST[''];
$sexo = $_POST[''];
$objetivo = $_POST[''];
$peso_actual = $_POST[''];
$peso_deseado = $_POST[''];
$actividad = $_POST[''];
$disponibilidad = $_POST[''];
//$instruccion_SQL = "INSERT INTO registros (correo, clave) VALUES ('$correo', '$clave')";
$instruccion_SQL = "INSERT INTO registro (correo, clave, nombre, edad, sexo, objetivo, peso_actual, peso_deseado, actividad, disponibilidad) 
                      VALUES ('$correo', '$clave', '', 0, '', '', 0, 0, '', 0)";

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
  echo "<meta http-equiv='Refresh' content=1;url='http://localhost/pi/cuestionariotest.html'>";
  echo "</head>";
  echo "<body>";
  //echo "<p>Registro guardado correctamente.</p>";
  //echo "Serás redirigido a la página principal en 3 segundos...<br><br>";
  echo "</body>";
  echo "</html>";
}

mysqli_close($conexion);
