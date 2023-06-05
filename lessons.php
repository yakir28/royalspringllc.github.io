<!DOCTYPE html>
<html lang="en">
<?php 


 
 include 'db.php';


  ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Royal Spring LLC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

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
  * Template Name: Royal Spring  - v4.10.0
  * Template URL: https://bootstrapmade.com/Royal Spring -free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Royal Spring</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.html">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li><a class="nav-link scrollto " href="index.html#services">Services</a></li>
          <li><a class="nav-link scrollto" href="index.html#features">Features</a></li>
          <li><a class="nav-link scrollto" href="index.html#contact">Contact</a></li>
         
         <li class="dropdown"><a href="index.html#"><span>More Info</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a class="nav-link scrollto" href="index.html#portfolio">portfolio</a></li>
              <li><a class="nav-link scrollto" href="index.html#faq">FAQ</a></li>
              <li><a class="nav-link scrollto" href="index.html#testimonials">Reviews</a></li>
            </ul>
          </li>
        
          <li><a class="getstarted scrollto" href="index.html#about">Home</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
<main>

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Royal Spring LLC</h1>
          <h2>We help individuals collect their funds from the government 
          </h2>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <section id="list" class="portfolio" >
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Royal Spring R.E lessons</h2>
        <p>Here you can find info and lessons about real estate and Royal Spring LLC</p>
      </div>

     <!---
     <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

    -->
  
  
        <!---card picture start-->
        <div class="Ecommerce py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php 
        $sql= "SELECT * FROM `videos`";
         $result = mysqli_query($conn,$sql);
        $datas = Array();   
        if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)){
            $datas[] = $row;
            $id = $row['id'];
            $video_url = $row['video_url'];
            $lesson = $row['lesson'];
            $sum = $row['sum'];


            
            ?>
        <div class="col">
          <div class="card shadow-sm">
            <video class="bd-placeholder-img card-img-top" width="100%" height="225" src="admins/uploads/<?php echo $row['video_url'];?>"></video>

            <div class="card-body">
              <h4><?php echo $row['name'];?></h4>
              <p class="card-text"><?php echo $row['sum'];?></p>
              <div class="d-flex justify-content-between align-items-center">
                  <form action="video_check.php" method="post">
                  <div class="btn-group">
                    <input type="hidden" name="name" value="<?php echo $row['name'];?>">
                    <input type="hidden" name="sum" value="<?php echo $row['sum'];?>">
                    <input type="hidden" name="video_url" value="<?php echo $row['video_url'];?>">
                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">



                  <button type="submit" id="entroll" class="btn btn-primary w-25 btn-outline-light">entroll now</button>
                  </div>
                  </form>
              </div>
            </div>
          </div>
        </div>
        <?php }}?>
      </div>
    </div>
  </div>


            <button type="submit"  name="" class="btn  text-light" title="More Details"><i class="bx bx-link"></i></button>
          </form>
          </div>
        </div>
      </div>
            <!---card picture end-->
  
    </div>
    </section>

   </main>
   <?php include 'footer.php'?>


  <a href="index.html#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>