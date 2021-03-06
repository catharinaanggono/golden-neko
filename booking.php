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

  <!-- =======================================================
  * Template Name: Delicious - v2.2.1
  * Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center ">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.php"><img src="pictures/logo.svg" alt="" class="img-fluid"><span style='color: #ffb03b;'>Golden</span> Neko</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="booking.php">Booking</a></li>

          <li class="book-a-table text-center"><a href="#book-a-table">Book a room</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Booking page</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Booking page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page" style='padding: 0px;'>
      <div class="container">
        <section id="book-a-table" class="book-a-table">
            <div class="container">
      
              <div class="section-title">
                <h2>Bringing private<span> to your movie experience</span></h2>
                <p>All you have to do is select the KTV outlet and movie. Easy right?</p>
              </div>
      
              <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="col-lg-4 col-md-6 form-group">
                    <select name="KTV" class="form-control" id="KTV">
                        <!-- <option value="KTV 0" disabled="disabled" selected="true"> Choose your KTV</option>
                        <option value="KTV 1"> KTV 1</option>
                        <option value="KTV 2"> KTV 2</option>
                        <option value="KTV 3"> KTV 3</option> -->
                    </select>
                    <div class="validate"></div>
                  </div>
                  <div class="col-lg-4 col-md-6 form-group">
                    <select name="DateTime" class="form-control" id="DateTime">
                        <option value="KTV 0" disabled="disabled" selected="true"> Choose your date and time</option>
                        <option value="Date 1"> 11 Apr 2021 8:00 PM</option>
                        <option value="Date 2"> 12 Apr 2021 8:00 PM</option>
                        <option value="Date 3"> 13 Apr 2021 8:00 PM</option>
                    </select>
                    <div class="validate"></div>
                  </div>
                  <div class="col-lg-4 col-md-6 form-group">
                    <select name="RoomType" class="form-control" id="RoomType" onchange="price()">
                        <option value="KTV 0" disabled="disabled" selected="true"> Choose your room type</option>
                        <option value='10'> Normal</option>
                        <option value="25"> VIP</option>
                    </select>
                    <div class="validate"></div>
                  </div>
                  <div class="col-lg-12 col-md-6 form-group">
                    <select name="KTV" class="form-control" id="Movie">
                        <!-- <option value="KTV 0" disabled="disabled" selected="true"> Select the movie you want to watch</option>
                        <option value="KTV 1"> Movie 1</option>
                        <option value="KTV 2"> Movie 2</option>
                        <option value="KTV 3"> Movie 3</option> -->
                    </select>
                    <div class="validate"></div>
                  </div>
                  <div class="col-lg-12 col-md-6 form-group">
                    <input type="text" name="date" class="form-control" id="date" placeholder="Plese enter your email" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div><br>
                    <p id='payment_fees' style="text-align:center;"></p>
                  </div>
                </div>

                <div id="smart-button-container">
                    <div style="text-align: center;">
                      <div id="paypal-button-container"></div>
                    </div>
                  </div>
                <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=SGD" data-sdk-integration-source="button-factory"></script>
                <script>
                  function initPayPalButton() {
                    paypal.Buttons({
                      style: {
                        shape: 'rect',
                        color: 'gold',
                        layout: 'vertical',
                        label: 'paypal',
                        
                      },
              
                      createOrder: function(data, actions) {
                        return actions.order.create({
                          purchase_units: [{"amount":{"currency_code":"SGD","value":10}}]
                        });
                      },
              
                      onApprove: function(data, actions) {
                        return actions.order.capture().then(function(details) {
                          alert('Transaction completed by ' + details.payer.name.given_name + '!');
                          email_json = {"recipients": document.getElementById('date').value};
                          var xmlHttp = new XMLHttpRequest();
                          xmlHttp.onreadystatechange = function() { 
                            if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
                              console.log(this.responseText);
                              window.location.href='index.php';
                            }
                            // callback(xmlHttp.responseText);
                          }
                          xmlHttp.open("POST", "http://localhost:5005/email", true); // true for asynchronous 
                          xmlHttp.setRequestHeader("Content-type", "application/json");
                          xmlHttp.send(JSON.stringify(email_json));
                          
                        });
                      },
              
                      onError: function(err) {
                        console.log(err);
                      }
                    }).render('#paypal-button-container');
                  }
                  initPayPalButton();
                  
                </script>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
                </div>
              </form>
      
            </div>
          </section>
      </div>
    </section>

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
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous">
    
  </script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    var name = localStorage.getItem("name");
    var movie_name = localStorage.getItem('movie_name');
    var movie_list = ['Avengers: Endgame', 'Godzilla vs Kong', 'Minari', 'Raya and The Last Dragon']
    var ktv_list = ['Ganso Manekineko Orchard Cineleisure', 'Manekineko *Scape', 'MANEKINEKO Bugis+', 'MANEKINEKO Marina Square', 'MANEKINEKO Lucky Chinatown', 'MANEKINEKO SAFRA Punggol', 'MANEKINEKO SAFRA Jurong', 'Manekineko Tampines 1']
    
    ktv_output = '';
    for(ktv of ktv_list){
      if(name == ktv){
        ktv_output += '<option value="'+ ktv+'" selected="true">'+ ktv+'</option>'
      }else{
        ktv_output += '<option value="'+ ktv+'">'+ ktv+'</option>'
      }
    }

    movie_output = '';
    for(movie of movie_list){
      if(movie_name == movie){
        movie_output += '<option value="'+ movie+'" selected="true">'+ movie+'</option>'
      }else{
        movie_output += '<option value="'+ movie+'">'+ movie+'</option>'
      }
    }

    document.getElementById("Movie").innerHTML = movie_output;
    document.getElementById("KTV").innerHTML = ktv_output;
  </script>

  <script>
    function price(){
      var price = document.getElementById("RoomType").value;
      var output_fees = "Total Fees: $" + price;
      document.getElementById("payment_fees").innerHTML = output_fees;
    }
  </script>

</body>

</html>
