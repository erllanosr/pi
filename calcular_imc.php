<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Gym Template" />
  <meta name="keywords" content="Gym, unica, creative, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" href="img/apple-icon-180x180.png" type="image/x-icon">
  <title>Calcular IMC</title>

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

<body>
  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>
  <?php
  session_start();
  if (isset($_SESSION['id'])) {
    echo '<header class="header-section">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="col-lg-3">';
    echo '<div class="logo">';
    echo '<a href="./index.php">';
    echo '<img src="img/logo.png" alt="" />';
    echo '</a>';
    echo '</div>';
    echo '</div>';
    echo '<div class="col-lg-6">';
    echo '<nav class="nav-menu">';
    echo '<ul>';
    echo '<li><a href="misrutinas.php">Mis Rutinas</a></li>';
    echo '<li><a href="./sobre_nosotros.php">Sobre Nosotros</a></li>';
    echo '<li class="active">';
    echo '<a href="#">Páginas</a>';
    echo '<ul class="dropdown">';
    echo '<li><a href="./sobre_nosotros.php">Sobre Nosotros</a></li>';
    echo '<li><a href="./calcular_imc.php">Calcular IMC</a></li>';
    echo '<li><a href="./404.html">404</a></li>';
    echo '</ul>';
    echo '</li>';
    echo '<li><a href="blog.php">Consejos</a></li>';
    echo '<li><a href="./contacto.php">Contacto</a></li>';
    echo '</ul>';
    echo '</nav>';
    echo '</div>';
    echo '<div class="col-lg-3">';
    echo '<div class="top-option">';
    echo '<div class="to-search search-switch">';
    echo '<i class="fa fa-search"></i>';
    echo '</div>';
    echo '<div class="to-social">';
    echo '<a href="misrutinas.php">Mi Cuenta</a>';
    echo '<a href="./php/logout.php">Cerrar Sesión</a>';
    echo '<a href="#"><i class="fa fa-facebook"></i></a>';
    echo '<a href="#"><i class="fa fa-twitter"></i></a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="canvas-open">';
    echo '<i class="fa fa-bars"></i>';
    echo '</div>';
    echo '</div>';
    echo '</header>';
  }

  if (!isset($_SESSION['id'])) {
    echo '<header class="header-section">';
    echo '<div class="container-fluid">';
    echo '<div class="row">';
    echo '<div class="col-lg-3">';
    echo '<div class="logo">';
    echo '<a href="./index.php">';
    echo '<img src="img/logo.png" alt="" />';
    echo '</a>';
    echo '</div>';
    echo '</div>';
    echo '<div class="col-lg-6">';
    echo '<nav class="nav-menu">';
    echo '<ul>';
    echo '<li><a href="./index.php">Inicio</a></li>';
    echo '<li><a href="sobre_nosotros.php">Sobre Nosotros</a></li>';
    echo '<li class="active">';
    echo '<a href="#">Páginas</a>';
    echo '<ul class="dropdown">';
    echo '<li ><a href="sobre_nosotros.php">Sobre Nosotros</a></li>';
    echo '<li><a href="./calcular_imc.php">IMC Calcular</a></li>';
    echo '<li><a href="./404.html">404</a></li>';
    echo '</ul>';
    echo '</li>';
    echo '<li><a href="./contacto.php">Contacto</a></li>';
    echo '</ul>';
    echo '</nav>';
    echo '</div>';
    echo '<div class="col-lg-3">';
    echo '<div class="top-option">';
    echo '<div class="to-search search-switch">';
    echo '<i class="fa fa-search"></i>';
    echo '</div>';
    echo '<div class="to-social">';
    echo '<a href="login.php">Iniciar Sesión</a>';
    echo '<a href="signup.php">Regístrate</a>';
    echo '<a href="#"><i class="fa fa-facebook"></i></a>';
    echo '<a href="#"><i class="fa fa-twitter"></i></a>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<div class="canvas-open">';
    echo '<i class="fa fa-bars"></i>';
    echo '</div>';
    echo '</div>';
    echo '</header>';
  }
  ?>

  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="breadcrumb-text">
            <h2>Calcula tu IMC</h2>
            <div class="bt-option">
              <a href="./index.php">Inicio</a>
              <a href="#">Páginas</a>
              <span>Calcular IMC</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- BMI Calculator Section Begin -->
  <section class="bmi-calculator-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title chart-title">
            <h2>Calcular tu IMC</h2>
          </div>
          <div class="chart-table">
            <table>
              <thead>
                <tr>
                  <th>IMC</th>
                  <th>Estado</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="point">Bajo 18.5</td>
                  <td>Bajo de peso</td>
                </tr>
                <tr>
                  <td class="point">18.5 - 24.9</td>
                  <td>Saludable</td>
                </tr>
                <tr>
                  <td class="point">25.0 - 29.9</td>
                  <td>Sobrepeso</td>
                </tr>
                <tr>
                  <td class="point">30.0 - and Above</td>
                  <td>Obesidad</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="section-title chart-calculate-title">
            <h2>Calcula tu IMC</h2>
          </div>
          <div class="chart-calculate-form">
            <p>
              El índice de masa corporal es una razón matemática que asocia la masa y la talla de un individuo, ideada
              por el estadístico belga Adolphe Quetelet, por lo que también se conoce como índice de Quetelet.
              <br>
              <strong>El IMC es el peso de una persona en kilogramos dividido por el cuadrado de la estatura.</strong>
            </p>
            <form action="">
              <script>
                function FigureBMImet(form, cm, kg) {
                  Meters = eval(cm) / 100;
                  Kilos = eval(kg);
                  Square = Meters * Meters;
                  form.calcval.value = Math.round((Kilos * 10) / Square) / 10;
                }
              </script>
              <div class="row">
                <div class="col-sm-6">
                  <input name="cm" maxlength="5" type="text" class="bmi-input" placeholder="Altura / cm" />
                </div>
                <div class="col-sm-6">
                  <input name="kg" type="text" maxlength="5" class="bmi-input" placeholder="Peso / kg" />
                </div>
                <div class="col-sm-6">
                  <input type="text" name="calcval" placeholder="Resultado" />
                </div>
                <div class="col-lg-12">
                  <input type="button" class="cta" name="calcmet" onclick="FigureBMImet(this.form,this.form.cm.value,this.form.kg.value)" value="Calcular" style="background-color: #f36100;" />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- BMI Calculator Section End -->

  <!-- Get In Touch Section Begin -->
  <div class="gettouch-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="gt-text">
            <i class="fa fa-map-marker"></i>
            <p>
              IMF Smart Education<br />
              Madrid 28012
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gt-text">
            <i class="fa fa-mobile"></i>
            <ul>
              <li>612345789</li>
              <li>698754321</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="gt-text email">
            <i class="fa fa-envelope"></i>
            <p>
              ellanosr@alumnos.imf.com <br />
              dsanzg@alumnos.imf.com
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Get In Touch Section End -->

  <!-- Footer Section Begin -->
  <section class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="fs-about">
            <div class="fa-logo">
              <a href="#"><img src="img/logo.png" alt="" /></a>
            </div>
            <p>Una aplicación que te ayudará a conseguir tus objetivos de una manera saludable y correcta.</p>
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
              <li><a href="#">Blog</a></li>
              <li><a href="#">Contacto</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6">
          <div class="fs-widget">
            <h4>Soporte</h4>
            <ul>
              <li><a href="#">Inicio Sesión</a></li>
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