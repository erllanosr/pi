<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Gym Template" />
  <meta name="keywords" content="Gym, unica, creative, html" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Consejos</title>

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
  <!-- Header Section Begin -->
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
    echo '<li>';
    echo '<a href="#">Páginas</a>';
    echo '<ul class="dropdown">';
    echo '<li><a href="./sobre_nosotros.php">Sobre Nosotros</a></li>';
    echo '<li><a href="./calcular_imc.php">IMC Calcular</a></li>';
    echo '<li><a href="./404.html">404</a></li>';
    echo '</ul>';
    echo '</li>';
    echo '<li class="active"><a href="blog.php">Consejos</a></li>';
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
    echo '<li><a href="./misrutinas.php">Mis Rutinas</a></li>';
    echo '<li><a href="./sobre_nosotros.php">Sobre Nosotros</a></li>';
    echo '<li>';
    echo '<a href="#">Páginas</a>';
    echo '<ul class="dropdown">';
    echo '<li><a href="./sobre_nosotros.php">Sobre Nosotros</a></li>';
    echo '<li><a href="./calcular_imc.php">IMC Calcular</a></li>';
    echo '<li><a href="./404.html">404</a></li>';
    echo '</ul>';
    echo '</li>';
    echo '<li class="active"><a href="blog.php">Consejos</a></li>';
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

  <!-- Header End -->

  <!-- Breadcrumb Section Begin -->
  <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb-bg.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="breadcrumb-text">
            <h2>Consejos</h2>
            <div class="bt-option">
              <a href="./index.php">Inicio</a>
              <span>Nuestro Blog</span>
              <p style="font-size: 30px;">Antes de empezar a entrenar recomendamos que sepa información clave para progresar correctamente y así alcanzar nuestros objetivos.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Breadcrumb Section End -->

  <!-- Blog Section Begin -->
  <section class="blog-section spad">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 p-0">
          <div class="blog-item">
            <div class="bi-pic">
              <img src="img/blog/blog-1.jpg" alt="" />
            </div>
            <div class="bi-text">
              <h5>
                <a href="./blog_entrenamiento.html">Mejora tu entrenamiento con estos consejos</a>
              </h5>
              <ul>
                <li>por David Sanz</li>
                <li>20/05/2022</li>
                <li>5 comentarios</li>
              </ul>
              <p>
                Antes de empezar a entrenar recomendamos que sepa información clave para progresar correctamente y así alcanzar nuestros objetivos.
              </p>
            </div>
          </div>
          <div class="blog-item">
            <div class="bi-pic">
              <img src="img/blog/blog-2.jpg" alt="" />
            </div>
            <div class="bi-text">
              <h5>
                <a href="./blog_nutricion.html">Mejor tu nutrición con estos consejos</a>
              </h5>
              <ul>
                <li>por Erick Llanos</li>
                <li>21/05/2022</li>
                <li>4 comentarios</li>
              </ul>
              <p>
                La nutrición es igual de importante que el entrenamiento, sin una correcta nutrición los objetivos serán más difíciles de alcanzar.
              </p>
            </div>
          </div>
          <div class="blog-item">
            <div class="bi-pic">
              <img src="img/blog/blog-3.jpg" alt="" />
            </div>
            <div class="bi-text">
              <h5>
                <a href="./blog_dieta.html">¿Cómo calcular nuestra dieta?</a>
              </h5>
              <ul>
                <li>by Erick Llanos</li>
                <li>19, Mayo, 2019</li>
                <li>20 Comment</li>
              </ul>
              <p>
                Consejos para realizar una dieta correctamente.
              </p>
            </div>
          </div>
          <div class="blog-pagination">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Siguiente</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-8 p-0">
          <div class="sidebar-option">
            <div class="so-categories">
              <h5 class="title">Categorías</h5>
              <ul>
                <li>
                  <a href="#">Entrenamiento <span>1</span></a>
                </li>
                <li>
                  <a href="#">Nutrición <span>1</span></a>
                </li>
                <li>
                  <a href="#">Dietas <span>1</span></a>
                </li>
                <li>
                  <a href="#">Hipertrofia <span>1</span></a>
                </li>
              </ul>
            </div>
            <!--<div class="so-latest">
                <h5 class="title">Feature posts</h5>
                <div class="latest-large set-bg" data-setbg="img/letest-blog/latest-1.jpg">
                  <div class="ll-text">
                    <h5><a href="./blog-details.html">This Japanese Way of Making Iced Coffee Is a Game...</a></h5>
                    <ul>
                      <li>Aug 20, 2019</li>
                      <li>20 Comment</li>
                    </ul>
                  </div>
                </div>
                <div class="latest-item">
                  <div class="li-pic">
                    <img src="img/letest-blog/latest-2.jpg" alt="" />
                  </div>
                  <div class="li-text">
                    <h6><a href="./blog-details.html">Grilled Potato and Green Bean Salad</a></h6>
                    <span class="li-time">Aug 15, 2019</span>
                  </div>
                </div>
                <div class="latest-item">
                  <div class="li-pic">
                    <img src="img/letest-blog/latest-3.jpg" alt="" />
                  </div>
                  <div class="li-text">
                    <h6><a href="./blog-details.html">The $8 French Rosé I Buy in Bulk Every Summer</a></h6>
                    <span class="li-time">Aug 15, 2019</span>
                  </div>
                </div>
                <div class="latest-item">
                  <div class="li-pic">
                    <img src="img/letest-blog/latest-4.jpg" alt="" />
                  </div>
                  <div class="li-text">
                    <h6><a href="./blog-details.html">Ina Garten's Skillet-Roasted Lemon Chicken</a></h6>
                    <span class="li-time">Aug 15, 2019</span>
                  </div>
                </div>
                <div class="latest-item">
                  <div class="li-pic">
                    <img src="img/letest-blog/latest-5.jpg" alt="" />
                  </div>
                  <div class="li-text">
                    <h6><a href="./blog-details.html">The Best Weeknight Baked Potatoes, 3 Creative Ways</a></h6>
                    <span class="li-time">Aug 15, 2019</span>
                  </div>
                </div>
              </div> -->
            <div class="so-tags">
              <h5 class="title">Tags</h5>
              <a href="#">Nutrición</a>
              <a href="#">Entrenamientos</a>
              <a href="#">Déficit</a>
              <a href="#">Volumen</a>
              <a href="#">Consejos</a>
              <a href="#">Dietas</a>
              <a href="#">Alimentación</a>
              <a href="#">Descansos</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Section End -->

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