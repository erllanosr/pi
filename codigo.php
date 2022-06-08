<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>PI 2022</title>
  <meta charset="UTF-8">
  <meta name="description" content="EndGam Gaming Magazine Template">
  <meta name="keywords" content="endGam,gGaming, magazine, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon" />

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i" rel="stylesheet">


  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/slicknav.min.css" />
  <link rel="stylesheet" href="css/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="css/animate.css" />

  <!-- Main Stylesheets -->
  <link rel="stylesheet" href="css/style.css" />


  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body>

  <!-- Page Preloder -->


  <!-- Header section -->
  <header class="">
    <div class="">
      <?php
      session_start();

      if (isset($_SESSION['id'])) {

        echo '<div class="header-social d-flex justify-content-end">';
        echo '<a href="#"><i class="fa fa-facebook"></i></a>';
        echo '<a href="#"><i class="fa fa-twitter"></i></a>';
        echo '</div>';
        echo '<div class="header-bar-warp d-flex">';
        echo '<!-- site logo -->';
        echo '<a href="index.php" class="site-logo">';
        echo '<img src="./img/logo.png" alt="">';
        echo '</a>';
        echo '<nav class="top-nav-area w-100">';
        echo '<div class="user-panel">';
        echo '<a href="edituser.php">Editar Usuario</a> / <a href="logout.php">Desconectar</a>';
        echo '</div>';
        echo '<!-- Menu -->';
        echo '<ul class="main-menu primary-menu">';
        echo '<li><a href="home.html">Home</a></li>';
        echo '<li><a href="games.html">Juegos</a>';
        echo '<ul class="sub-menu">';
        echo '<li><a href="game-single.html">Juego Ejemplo</a></li>';
        echo '</ul>';
        echo '</li>';
        echo '<li><a href="review.html">Reviews</a></li>';
        echo '<li><a href="blog.html">Noticias</a></li>';
        echo '<li><a href="contact.html">Contacto</a></li>';
        echo '</ul>';
        echo '</nav>';
        echo '</div>';
      }


      if (!isset($_SESSION['id'])) {

        echo '<div class="header-social d-flex justify-content-end">';
        echo '<a href="#"><i class="fa fa-facebook"></i></a>';
        echo '<a href="#"><i class="fa fa-twitter"></i></a>';
        echo '</div>';
        echo '<div class="header-bar-warp d-flex">';
        echo '<a href="index.php" class="site-logo">';
        echo '<img src="./img/logo.png" alt="">';
        echo '</a>';
        echo '<nav class="top-nav-area w-100">';
        echo '<div class="user-panel">';
        echo '<a href="login.php">Inicia Sesión</a> / <a href="register.php">Registrarse</a>';
        echo '</div>';
        echo '<ul class="main-menu primary-menu">';
        echo '<li><a href="index.php">Home</a></li>';
        echo '<li><a href="games.html">Juegos</a>';
        echo '<ul class="sub-menu">';
        echo '<li><a href="game-single.html">Juego Ejemplo</a></li>';
        echo '</ul>';
        echo '</li>';
        echo '<li><a href="review.html">Reviews</a></li>';
        echo '<li><a href="blog.html">Noticias</a></li>';
        echo '<li><a href="contact.html">Contacto</a></li>';
        echo '</ul>';
        echo '</nav>';
        echo '</div>';
      }




      ?>
    </div>
  </header>
  <!-- Header section end -->


  <!-- Hero section -->
  <section class="hero-section overflow-hidden">
    <div class="hero-slider owl-carousel">
      <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-1.jpg">
        <div class="container">
          <h2>JUEGA</h2>
          <p>Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor,<br>sit amet elementum lorem. Ut cursus tempor turpis.</p>
          <a href="#" class="site-btn">Leer Más <img src="img/icons/double-arrow.png" alt="#" /></a>
        </div>
      </div>
      <div class="hero-item set-bg d-flex align-items-center justify-content-center text-center" data-setbg="img/slider-bg-2.jpg">
        <div class="container">
          <h2>JUEGA</h2>
          <p>Fusce erat dui, venenatis et erat in, vulputate dignissim lacus. Donec vitae tempus dolor,<br>sit amet elementum lorem. Ut cursus tempor turpis.</p>
          <a href="#" class="site-btn">Leer Más <img src="img/icons/double-arrow.png" alt="#" /></a>
        </div>
      </div>
    </div>
  </section>
  <!-- Hero section end-->


  <!-- Intro section -->
  <section class="intro-section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="intro-text-box text-box text-white">
            <div class="top-meta">11.11.18 / in <a href="">Juegos</a></div>
            <h3>Titulo 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida....</p>
            <a href="#" class="read-more">Leer Más <img src="img/icons/double-arrow.png" alt="#" /></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="intro-text-box text-box text-white">
            <div class="top-meta">11.11.18 / in <a href="">Playstation</a></div>
            <h3>Titulo 2</h3>
            <p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum labore suspendisse ultrices gravida....</p>
            <a href="#" class="read-more">Leer Más <img src="img/icons/double-arrow.png" alt="#" /></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="intro-text-box text-box text-white">
            <div class="top-meta">11.11.18 / in <a href="">Reviews</a></div>
            <h3>Titulo 3</h3>
            <p>Sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida ncididunt ut labore ....</p>
            <a href="#" class="read-more">Leer Más <img src="img/icons/double-arrow.png" alt="#" /></a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Intro section end -->


  <!-- Blog section -->
  <!-- <section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8 col-md-7">
					<div class="section-title text-white">
						<h2>Últimas Noticias</h2>
					</div>
					<ul class="blog-filter">
						<li><a href="#">Carerras</a></li>
						<li><a href="#">Shooters</a></li>
						<li><a href="#">Estrategia</a></li>
						<li><a href="#">Online</a></li>
					</ul>
					<!-- Blog item -->
  <!-- <div class="blog-item">
						<div class="blog-thumb">
							<img src="./img/blog/1.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>Lorem ipsum dolor</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
  <!-- <div class="blog-item">
						<div class="blog-thumb">
							<img src="./img/blog/2.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>Lorem ipsum dolor</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
					<!-- Blog item -->
  <!-- <div class="blog-item">
						<div class="blog-thumb">
							<img src="./img/blog/3.jpg" alt="">
						</div>
						<div class="blog-text text-box text-white">
							<div class="top-meta">11.11.18  /  in <a href="">Games</a></div>
							<h3>Lorem ipsum dolor</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius-mod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Lorem ipsum dolor sit amet, consecte-tur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.....</p>
							<a href="#" class="read-more">Read More  <img src="img/icons/double-arrow.png" alt="#"/></a>
						</div>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-5 sidebar">
					<div id="stickySidebar">
						<div class="widget-item">
							<h4 class="widget-title">Trending</h4>
							<div class="trending-widget">
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./img/blog-widget/1.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./img/blog-widget/2.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./img/blog-widget/3.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
								<div class="tw-item">
									<div class="tw-thumb">
										<img src="./img/blog-widget/4.jpg" alt="#">
									</div>
									<div class="tw-text">
										<div class="tw-meta">11.11.18  /  in <a href="">Games</a></div>
										<h5>The best online game is out now!</h5>
									</div>
								</div>
							</div>
						</div>
						<div class="widget-item">
							<div class="categories-widget">
								<h4 class="widget-title">categories</h4>
								<ul>
									<li><a href="">Games</a></li>
									<li><a href="">Gaming Tips & Tricks</a></li>
									<li><a href="">Online Games</a></li>
									<li><a href="">Team Games</a></li>
									<li><a href="">Community</a></li>
									<li><a href="">Uncategorized</a></li>
								</ul>
							</div>
						</div>
						<div class="widget-item">
						<a href="#" class="add">
							<img src="./img/add.jpg" alt="">
						</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section> --> --> --> -->
  <!-- Blog section end -->


  <!-- Intro section -->
  <section class="intro-video-section set-bg d-flex align-items-end " data-setbg="./img/promo-bg.jpg">
    <a href="https://www.youtube.com/watch?v=uFsGy5x_fyQ" class="video-play-btn video-popup"><img src="img/icons/solid-right-arrow.png" alt="#"></a>
    <div class="container">
      <div class="video-text">
        <h2>Video Promocional del Juego</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
      </div>
    </div>
  </section>
  <!-- Intro section end -->


  <!-- Featured section -->
  <section class="featured-section">
    <div class="featured-bg set-bg" data-setbg="img/featured-bg.jpg"></div>
    <div class="featured-box">
      <div class="text-box">
        <div class="top-meta">11.11.18 / en <a href="">Juegos</a></div>
        <h3>Juego Tendencia</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquamet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vestibulum posuere porttitor justo id pellentesque. Proin id lacus feugiat, posuere erat sit amet, commodo ipsum. Donec pellentesque vestibulum metus...</p>
        <a href="#" class="read-more">Leer Más <img src="img/icons/double-arrow.png" alt="#" /></a>
      </div>
    </div>
  </section>
  <!-- Featured section end-->






  <!-- Footer section -->
  <ul>
    <li><a href="">Home</a></li>
    <li><a href="">Juegos</a></li>
    <li><a href="">Reviews</a></li>
    <li><a href="">Noticias</a></li>
    <li><a href="">Contacto</a></li>
  </ul>
  <div class="">
    <a href="#"><i class="fa fa-facebook"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
  </div>
  <div class="copyright"><a href="">PI</a> 2022 @ Copyright IMF</div>
  </div>
  </footer>
  <!-- Footer section end -->


  <!--====== Javascripts & Jquery ======-->
</body>

</html>