<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Gym Template" />
  <meta name="keywords" content="Gym, unica, creative, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="shortcut icon" href="img/apple-icon-180x180.png" type="image/x-icon">
  <title>Sobre Nosotros</title>

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
    echo '<li class="active"><a href="./sobre_nosotros.php">Sobre Nosotros</a></li>';
    echo '<li>';
    echo '<a href="#">Páginas</a>';
    echo '<ul class="dropdown">';
    echo '<li><a href="./sobre_nosotros.php">Sobre Nosotros</a></li>';
    echo '<li><a href="./calcular_imc.php">IMC Calcular</a></li>';
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
    echo '<li class="active"><a href="sobre_nosotros.php">Sobre Nosotros</a></li>';
    echo '<li>';
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
            <h2>Sobre Nosotros</h2>
            <div class="bt-option">
              <a href="./index.php">Inicio</a>
              <span>Sobre Nosotros</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- About US Section Begin -->
  <section class="aboutus-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 p-0">
          <div class="about-video set-bg" data-setbg="img/about-us.jpg">
            <a href="https://www.youtube.com/watch?v=gd5i6hQQwcg" class="play-btn video-popup"><i class="fa fa-caret-right"></i></a>
          </div>
        </div>
        <div class="col-lg-6 p-0">
          <div class="about-text">
            <div class="section-title">
              <span>Sobre Nosotros</span>
              <h2>¿Qué hemos hecho?</h2>
            </div>
            <div class="at-desc">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan
                lacus vel facilisis. aliquip ex ea commodo consequat sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor.
              </p>
            </div>
            <div class="about-bar">
              <div class="ab-item">
                <p>Hipertrofia</p>
                <div id="bar1" class="barfiller">
                  <span class="fill" data-percentage="80"></span>
                  <div class="tipWrap">
                    <span class="tip"></span>
                  </div>
                </div>
              </div>
              <div class="ab-item">
                <p>Entrenamiento</p>
                <div id="bar2" class="barfiller">
                  <span class="fill" data-percentage="85"></span>
                  <div class="tipWrap">
                    <span class="tip"></span>
                  </div>
                </div>
              </div>
              <div class="ab-item">
                <p>Nutrición</p>
                <div id="bar3" class="barfiller">
                  <span class="fill" data-percentage="75"></span>
                  <div class="tipWrap">
                    <span class="tip"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About US Section End -->

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
              <li><a href="login.php">Inicio Sesión</a></li>
              <li><a href="#">Mi Cuenta</a></li>
              <li><a href="contact.html">Contacto</a></li>
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
        <input type="text" id="search-input" placeholder="Busca..." />
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