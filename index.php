<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Golden Neko</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="pictures/logo.svg" rel="icon">
  <link href="pictures/logo.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Script files -->
  <script src='index.js'></script>
  <!-- =======================================================
  * Template Name: Delicious - v2.2.1
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1><a href="index.php" class="navbar-brand"><img src="pictures/logo.svg" alt="" class="img-fluid"></a><class class="text-light"><a href="index.html"><span style='color: #ffb03b;'>Golden</span> Neko</a></class></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        
      </div>
      <img scr='pictures/logo.svg'>
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="booking.php">Booking</a></li>

          <li class="book-a-table text-center"><a href="booking.php">Book a room</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(pictures/new.svg); background-size: 110%; background-position-x: 40%; background-position-y: 50%; background-repeat: no-repeat;">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"><span>Golden</span> Neko</h2>
                <p class="animate__animated animate__fadeInUp">Have you ever dreamt of having a private cinema to yourself? Here in Golden Neko, we make that dream a reality. What are you waiting for? Come and visit us now!</p>
                <div>
                  <a href="#movie" class="btn-menu animate__animated animate__fadeInUp scrollto">Movies</a>
                  <a href="booking.php" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Room</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background: url(pictures/ktv.jpg); background-size: 110%; background-position-y: 10%; background-repeat: no-repeat;">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Bringing private to your movie experience</h2>
                <p class="animate__animated animate__fadeInUp">The best cinema experience you will have.</p>
                <div>
                  <a href="#movie" class="btn-menu animate__animated animate__fadeInUp scrollto">Movies</a>
                  <a href="booking.php" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Room</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background: url(pictures/rayapicu.jpeg); background-size: 100%; background-position-y: 10%; background-repeat: no-repeat;">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Don't miss out on Raya and the Last Dragon!</h2>
                <p class="animate__animated animate__fadeInUp">Raya has long heard the stories of the last dragon from her father Benja. As a villainous force was working its way across the land, turning people into stone, magical dragons united their forces together into a stone and one named Sisu used it to stop the pending apocalypse.</p>
                <div>
                  <a href="#movie" class="btn-menu animate__animated animate__fadeInUp scrollto">Movies</a>
                  <a href="booking.php" class="btn-book animate__animated animate__fadeInUp scrollto">Book a Room</a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="movie" class="about">
      <div class="container-fluid">
        <h1 style="text-align: center;">Movies</h1>

        <!-- Row 1 -->
        <div class="row">
          <div class='col-md-3'>
            <a onclick="move_movie('Avengers: Endgame')">
              <img src='pictures/avengers.jpg' onclick="move_movie('Avengers: Endgame')" alt='avengers' width="100%" >
            </a>
          </div>
          <div class='col-md-3'>
            <a onclick="move_movie('Godzilla vs Kong')">
              <img src='pictures/goziila.png' onclick="move_movie('Godzilla vs Kong')" alt='gozilla' width="100%" >
            </a>
          </div>
          <div class='col-md-3'>
            <a onclick="move_movie('Minari')">
              <img src='pictures/minari.jpg' onclick="move_movie('Minari')" alt='minari' width="100%" >
            </a>
          </div>
          <div class='col-md-3'>
            <a onclick="move_movie('Raya and The Last Dragon')">
              <img src='pictures/raya.jpeg'  alt='raya' width="100%" >
            </a>
          </div>
        </div>

        <div class="row">
          <div class='col-md-3' style="text-align: center;">
            Avengers: Endgame
          </div>
          <div class='col-md-3' style="text-align: center;">
            Godzilla vs Kong
          </div>
          <div class='col-md-3'style="text-align: center;">
            Minari
          </div>
          <div class='col-md-3'style="text-align: center;">
            Raya and The Last Dragon
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu">
      <div class="container">

        <div class="section-title">
          <h2>Check out our <span>Locations</span></h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-central">Central</li>
              <li data-filter=".filter-NE">North East</li>
              <li data-filter=".filter-West">West</li>
              <li data-filter=".filter-East">East</li>
            </ul>
          </div>
        </div>

        <div class="row menu-container">

          <div class="col-lg-6 menu-item filter-central">
            <div class="menu-content">
              <a onclick="move('Ganso Manekineko Orchard Cineleisure')">Ganso Manekineko Orchard Cineleisure</a><span>Open</span>
            </div>
            <div class="menu-ingredients">
              Address: 8 Grange Road #08-01 Cathay Cineleisure Orchard Singapore 239695 <br>
              Telphone: 6756 3113<br>
              Operating Hours: 11:00am - 6:00am
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-central">
            <div class="menu-content">
              <a onclick="move('Manekineko *Scape')">Manekineko *Scape</a><span>Open</span>
            </div>
            <div class="menu-ingredients">
              Address: 2 Orchard Link #03-05 *SCAPE Singapore 237978 <br>
              Telphone: 6755 3113<br>
              Operating Hours: 11:00am - 3:00am
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-central">
            <div class="menu-content">
              <a onclick="move('MANEKINEKO Bugis+')">MANEKINEKO Bugis+</a><span>Open</span>
            </div>
            <div class="menu-ingredients">
              Address: 201 Victoria Street #03-18 Singapore 188067 <br>
              Telphone: 6243 3113<br>
              Operating Hours: 11:00am - 3:00am
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-central">
            <div class="menu-content">
              <a onclick="move('MANEKINEKO Marina Square')">MANEKINEKO Marina Square</a><span>Open</span>
            </div>
            <div class="menu-ingredients">
              Address: 6 Raffles Boulevard #03-208, Singapore 039594 <br>
              Telphone: 6562 3113<br>
              Operating Hours: 11:00am - 3:00am
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-central">
            <div class="menu-content">
              <a onclick="move('MANEKINEKO Lucky Chinatown')">MANEKINEKO Lucky Chinatown</a><span>Open</span>
            </div>
            <div class="menu-ingredients">
              Address: 211 New Bridge Road #04-01 Singapore 059432<br>
              Telphone: 6534 3113<br>
              Operating Hours: 11:00am - 3:00am
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-NE">
            <div class="menu-content">
              <a onclick="move('MANEKINEKO SAFRA Punggol')">MANEKINEKO SAFRA Punggol</a><span>Open</span>
            </div>
            <div class="menu-ingredients">
              Address: 9 Sentul Crescent #05-02 Singapore 828654<br>
              Telphone: 6387 3113<br>
              Operating Hours: 11:00am - 2:00am (Sun - Thu), 11:00am - 3:00am (Fri - Sat)
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-West">
            <div class="menu-content">
              <a onclick="move('MANEKINEKO SAFRA Jurong')">MANEKINEKO SAFRA Jurong</a><span>Open</span>
            </div>
            <div class="menu-ingredients">
              Address: 333 Boon Lay Way #3A-01 Singapore 649848<br>
              Telphone: 6561 3113<br>
              Operating Hours: 11:00am - 3:00am
            </div>
          </div>

          <div class="col-lg-6 menu-item filter-East">
            <div class="menu-content">
              <a onclick="move('Manekineko Tampines 1')">Manekineko Tampines 1</a><span>Open</span>
            </div>
            <div class="menu-ingredients">
              Address: 10 Tampines Central One #04-07/08, Tampines One, Singapore 529536<br>
              Telphone: 6769 3113<br>
              Operating Hours: 11:00am - 1:00am
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Menu Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Golden <span style="color: white;"> Neko </span></h3>
      <p>Bringing private to your movie experience</p>
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Delicious</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
