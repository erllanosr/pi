<?php
//include();
require("./conexion.php"); // Es normal usar dos archivos distintos.

//echo "PRUEBA 1";
// Vamos a trasladar mediante el uso de variables los valores que nos va a enviar el formulario


$correo = $_POST['correo'];
$clave = $_POST['clave'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$sexo = $_POST['sexo'];
$objetivo = $_POST['objetivo'];
$peso_actual = $_POST['peso_actual'];
$peso_deseado = $_POST['peso_deseado'];
$actividad = $_POST['actividad'];
$disponibilidad = $_POST['disponibilidad'];
$instruccion_SQL = "INSERT INTO registro (correo, clave, nombre, edad, sexo, objetivo, peso_actual, peso_deseado, actividad, disponibilidad) VALUES ('', '', '$nombre', $edad, '$sexo', '$objetivo', $peso_actual, $peso_deseado, '$actividad', '$disponibilidad')";

//echo "mysqli_error(mysqli $instruccion_SQL)";

//echo "PRUEBA 2";

$resultado = mysqli_query($conexion, $instruccion_SQL);
if ($resultado == FALSE) {
  echo "Error en la consulta.";
} else {
  //header('Location: http://localhost/crud/htmlArchivos/index.html');
  //die();
  //echo "<html>";
  //echo "<head>";
  echo "<meta http-equiv='Refresh' content=1;url='../home.html'>";
  echo "</head>";
  echo "<body>";
  //echo "<p>Registro guardado correctamente.</p>";
  //echo "Serás redirigido a la página principal en 3 segundos...<br><br>";
  echo "</body>";
  echo "</html>";
}

mysqli_close($conexion);
