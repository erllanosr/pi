<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>MyFitnesSon</title>

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

  <!-- Offcanvas Menu Section Begin -->
  <div class="offcanvas-menu-overlay"></div>
  <div class="offcanvas-menu-wrapper">
    <div class="canvas-close">
      <i class="fa fa-close"></i>
    </div>
    <div class="canvas-search search-switch">
      <i class="fa fa-search"></i>
    </div>
    <nav class="canvas-menu mobile-menu">
      <ul>
        <li><a href="./index.html">Inicio</a></li>
        <li><a href="./about-us.html">Sobre Nosotros</a></li>
        <li>
          <a href="#">Páginas</a>
          <ul class="dropdown">
            <li><a href="./about-us.html">Sobre Nosotros</a></li>
            <li><a href="./bmi-calculator.html">IMC Calcular</a></li>
            <li><a href="./404.html">404</a></li>
          </ul>
        </li>
        <li><a href="./contact.html">Contacto</a></li>
      </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="canvas-social">
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-youtube-play"></i></a>
      <a href="#"><i class="fa fa-instagram"></i></a>
    </div>
  </div>
  <!-- Offcanvas Menu Section End -->

  <!-- Header Section Begin -->
  <header class="header-section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="logo">
            <a href="./index.html">
              <img src="img/logo.png" alt="" />
            </a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="nav-menu">
            <ul>
              <li class="active"><a href="./index.html">Inicio</a></li>
              <li><a href="./about-us.html">Sobre Nosotros</a></li>
              <li>
                <a href="#">Páginas</a>
                <ul class="dropdown">
                  <li><a href="./about-us.html">Sobre Nosotros</a></li>
                  <li><a href="./bmi-calculator.html">IMC Calcular</a></li>
                  <li><a href="./404.html">404</a></li>
                </ul>
              </li>
              <li><a href="./contact.html">Contacto</a></li>
            </ul>
          </nav>
        </div>
        <div class="col-lg-3">
          <div class="top-option">
            <div class="to-search search-switch">
              <i class="fa fa-search"></i>
            </div>
            <div class="to-social">
              <a href="#"><i class="fa fa-facebook"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>
              <a href="#"><i class="fa fa-youtube-play"></i></a>
              <a href="#"><i class="fa fa-instagram"></i></a>
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

  <!-- Banner Section Begin -->
  <section class="banner-section set-bg" data-setbg="img/banner-bg.jpg">
    <form action="login.php" class="form_login" method="">
      <fieldset>
        <legend>Inicia Sesión</legend>
        <label for="correo">Correo</label>
        <input type="email" name="correo">
        <br>
        <label for="clave">Clave&nbsp;&nbsp;</label>
        <input type="password" name="clave">
        <br>
        <input type="submit" value="enviar">
      </fieldset>
      <br>
      <h6 style="color: #fff">¿No tienes una cuenta?</h6>
      <a href="signup.html" style="color: #f36100;">Regístrate</a>
    </form>
  </section>
  <!-- Banner Section End -->

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