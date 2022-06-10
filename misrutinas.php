<?php
require("./php/conexion.php");
$consulta = "SELECT * FROM rtn_pplt4 WHERE id BETWEEN 1 AND 6";
$consulta2 = "SELECT * FROM rtn_pplt4 WHERE id BETWEEN 7 AND 12";
$consulta3 = "SELECT * FROM rtn_pplt4 WHERE id BETWEEN 13 AND 18";
$consulta4 = "SELECT * FROM rtn_pplt4 WHERE id BETWEEN 19 AND 25";

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" href="img/apple-icon-180x180.png" type="image/x-icon">
  <title>Mis rutinas</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet" />

  <!-- Css Styles -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/flaticon.css" type="text/css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css" />
  <link rel="stylesheet" href="css/barfiller.css" type="text/css" />
  <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
  <link rel="stylesheet" href="css/slicknav.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>

<body style="background-color: #000;">
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header Section Begin -->
  <header class="header-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="logo">
            <a href="./index.php">
              <img src="img/logo.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="nav-menu">
            <ul>
              <li class="active"><a href="misrutinas.php">Mis rutinas</a></li>
              <li><a href="./sobre_nosotros.php">Sobre Nosotros</a></li>
              <li>
                <a href="#">Páginas</a>
                <ul class="dropdown">
                  <li><a href="./sobre_nosotros.php">Sobre Nosotros</a></li>
                  <li><a href="./calcular_imc.php">IMC Calcular</a></li>
                  <li><a href="./404.html">404</a></li>
                </ul>
              </li>
              <li><a href="blog.php">Consejos</a></li>
              <li><a href="./contacto.php">Contacto</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3">
          <div class="top-option">
            <div class="to-search search-switch">
              <i class="fa fa-search"></i>
            </div>
            <div class="to-social">
              <a href="misrutinas.php">Mi usuario</a>
              <a href="./php/logout.php">Cerrar Sesión</a>
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="canvas-open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>
  <!-- Header End -->

  <!-- Hero Section Begin -->
  <!-- Hero Section End -->

  <!-- Banner Section Begin -->
  <section>
    <h1 style="color: #fff;" class="h1_tabla">Tu rutina</h1>
    <table style="color: #fff;" class="tabla_rutinas">
      <caption>PUSH</caption>
      <tr>
        <th>Ejercicio</th>
        <th>Series</th>
        <th>Día</th>
      </tr>
      <?php
      if ($resultado = mysqli_query($conexion, $consulta)) {
        while ($row = mysqli_fetch_assoc($resultado)) {
      ?>
          <tr>
            <td><?php echo $row['ejercicio'] ?></td>
            <td><?php echo $row['descripcion_ejercicio'] ?></td>
            <td><?php echo $row['dias'] ?></td>
          </tr>
      <?php
        }
      }
      ?>
    </table>
    <hr>
    <table style="color: #fff;" class="tabla_rutinas">
      <caption>PULL</caption>
      <tr>
        <th>Ejercicio</th>
        <th>Series</th>
        <th>Día</th>
      </tr>
      <?php
      if ($resultado = mysqli_query($conexion, $consulta2)) {
        while ($row = mysqli_fetch_assoc($resultado)) {
      ?>
          <tr>
            <td><?php echo $row['ejercicio'] ?></td>
            <td><?php echo $row['descripcion_ejercicio'] ?></td>
            <td><?php echo $row['dias'] ?></td>
          </tr>
      <?php
        }
      }
      ?>
    </table>
    <table style="color: #fff;" class="tabla_rutinas">
      <caption>LEG</caption>
      <tr>
        <th>Ejercicio</th>
        <th>Series</th>
        <th>Día</th>
      </tr>
      <?php
      if ($resultado = mysqli_query($conexion, $consulta3)) {
        while ($row = mysqli_fetch_assoc($resultado)) {
      ?>
          <tr>
            <td><?php echo $row['ejercicio'] ?></td>
            <td><?php echo $row['descripcion_ejercicio'] ?></td>
            <td><?php echo $row['dias'] ?></td>
          </tr>
      <?php
        }
      }
      ?>
    </table>
    <table style="color: #fff;" class="tabla_rutinas">
      <caption>TORSO</caption>
      <tr>
        <th>Ejercicio</th>
        <th>Series</th>
        <th>Día</th>
      </tr>
      <?php
      if ($resultado = mysqli_query($conexion, $consulta4)) {
        while ($row = mysqli_fetch_assoc($resultado)) {
      ?>
          <tr>
            <td><?php echo $row['ejercicio'] ?></td>
            <td><?php echo $row['descripcion_ejercicio'] ?></td>
            <td><?php echo $row['dias'] ?></td>
          </tr>
      <?php
        }
      }
      ?>
    </table>


  </section>
  <!-- Banner Section End -->
  <!--Banner Section End -->

  <!-- Get In Touch Section Begin -->
  <!-- Footer Section Begin -->
  <section class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="fs-about">
            <div class="fa-logo">
              <a href="#"><img src="img/logo.png" alt="" /></a>
            </div>
            <p>Una aplicación que te ayudará a conseguir tus objetivos de una manera correcta y saludable.</p>
            <div class="fa-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-envelope-o"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <div class="fs-widget">
            <h4>Links</h4>
            <ul>
              <li><a href="#">Sobre Nosotros</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <div class="fs-widget">
            <h4>Soporte</h4>
            <ul>
              <li><a href="#">Mi Cuenta</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 text-center">
            <div class="copyright-text">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                Todos los derechos reservados. | Erick Llanos Ríos - David Sanz García
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- Footer Section End -->
  <!-- Search model Begin -->
  <div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
      <div class="search-close-switch">+</div>
      <form class="search-model-form">
        <input type="text" id="search-input" placeholder="Search here....." />
      </form>
    </div>
  </div>
  <!-- Search model end -->
  <!-- Js Plugins -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/masonry.pkgd.min.js"></script>
  <script src="js/jquery.barfiller.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/main.js"></script>
</body>

</html>