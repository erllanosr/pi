<?php
session_start();
echo "PRUEBAS 1";
if (isset($_POST['correo']) && isset($_POST['clave'])) {
  $correo = $_POST['correo'];
  $clave = $_POST['clave'];

  include("connectBD.php");

  echo "PRUEBAS 2";
  $sql = "SELECT * FROM registro WHERE correo=:correo AND clave = :clave;";
  echo "PRUEBAS 3";
  $stmt = $pdo->prepare($sql);
  echo "PRUEBAS 4";
  $stmt->execute(array(
    ':correo' => $correo,
    ':clave' => $clave
  ));
  echo "PRUEBAS 3";

  if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $_SESSION['id'] = $row['id'];
    }
    echo "PRUEBAS";

    header("Location:home.html");
  } else {
    echo "PRUEBAS";
    echo '<span style="color: red;">Login Fail</span>';
    header("Location:login.php?errcode=1");
  }
}
