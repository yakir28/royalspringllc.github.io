<!DOCTYPE php>
<html lang="en">
<?php 
session_start();
 include 'db.php';
  ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> House Details  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Royal Spring - v4.10.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.php">Royal Spring</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">about</a></li>
          <li><a class="nav-link scrollto " href="index.php#services">services</a></li>
          <li><a class="nav-link scrollto" href="index.php#features">features</a></li>
          <li><a class="nav-link scrollto" href="index.php#contact">contact</a></li>
         
         <li class="dropdown"><a href="index.php#"><span>More Info</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="index.php#portfolio">portfolio</a></li>
              <li><a class="nav-link scrollto" href="index.php#faq">FAQ</a></li>
              <li><a class="nav-link scrollto" href="index.php#testimonials">Reviews</a></li>
            </ul>
          </li>
        
          <li><a class="getstarted scrollto" href="index.php#about">Get Started</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>House Details</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>House Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
     
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="admins/img/<?php echo $_SESSION['image'];?>" alt="">
                </div>

                

              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Project information</h3>
              <ul>
                <li class="d-flex"><h5><strong>Headline</strong>:</h5> <h5 class="mx-2"><?php echo $_SESSION['name'];?></h5></li>
                <li class="d-flex"><h6><strong>Price</strong>:</h6>  <h6 class="mx-2"><?php echo $_SESSION['price'];?></h6> <strong>$</strong></li>
                <li class="d-flex"><h6><strong>County</strong>:</h6> <h6 class="mx-2"><?php echo $_SESSION['county'];?></h6></li>
                <li class="d-flex"><h6><strong>Date</strong>:</h6>  <h6 class="mx-2"><?php echo $_SESSION['date'];?></h6></li>
                <li class="d-flex"><h6><strong>bd/br</strong>:</h6><h6 class="text-primary mx-2"> <?php echo $_SESSION['bd'];?> <strong>/</strong>  <?php echo $_SESSION['br'];?></h6> </li>

              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Extended Details</h2>
              <p>
                <?php echo $_SESSION['text'];?>
              </p>

              <form action="index.php#contact" method="post">
                <button class="btn btn-primary w-50" id="btn-int">Im Interested!</button>
              </form>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End index.php#main -->

<?php include 'footer.php'?>

  <a href="index.php#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

            </html>