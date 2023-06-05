<!DOCTYPE php>
<?PHP 
session_start();
include "register/config/db.php";
if (!isset($_SESSION['admin_name'])) {
    header("location:register/login.php");
}
?>



<!---delete method--->


 

<!DOCTYPE php>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Royal Spring || admins</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Royal Spring  - v4.10.0
  * Template URL: https://bootstrapmade.com/Royal Spring -free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    main{
      overflow-x: hidden;
    }
    body{
      overflow-x: hidden;
    }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="../index.html">Royal Spring</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">dashboard</a></li>
          <li><a class="nav-link scrollto" href="#contact">contact users</a></li>
          <li><a class="nav-link scrollto" href="#insert">insert house</a></li>
          <li><a class="nav-link scrollto" href="#delete-house">delete house</a></li>
          <li><a class="nav-link scrollto" href="#admin-users">admin users</a></li>
          <li><a class="nav-link scrollto" href="#insert-admin">insert admin</a></li>
          <li><a class="nav-link scrollto" href="#insert-lesson">insert lesson</a></li>
          <li><a class="nav-link scrollto" href="#email-sub">Email Subcribers</a></li>


        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container-fluid" data-aos="fade-up">
      <div class="row justify-content-center">
        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Hay <?php echo $_SESSION['admin_name'];?></h1>
          <h2>This is the admin control panel set for you!
            enjoy:)
          </h2>
          <div><a href="register/logout.php" class="btn-get-started scrollto">Sign Out</a></div>
        </div>
        <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
          <img src="../assets/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

      

<main>
   <!------contact table start----->
  <section class="w-100 m-5" id="contact">
  <h2 id="contact" class="">contact users</h2>
      <p class="">in this section you can watch and delete your leads that fill their info <a href="../index.php#contact">here</a> </p>
      <div class="table-responsive" >
      <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Message</th>
              <th scope="col">Remove</th>
            </tr>
          </thead>
          <tbody>
    <?php
        $sql= "SELECT * FROM `contact`";
        $result = mysqli_query($conn,$sql);
        $datas = Array();
        if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $datas[] = $row;
        $id   =  $row['id'];
        $name = $row['name']."<br>";
        $email = $row['email'];
        $phone = $row['phone'];
        $message = $row['mess'];
   
    ?>
            <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['name'];?></td>
              <td><?php echo $row['email'];?></td>
              <td><?php echo $row['phone'];?></td>
              <td><?php echo $row['mess'];?></td>
              <form action="remove.php" method="post"> 
              <td><button class="btn btn-primary" type="submit" name="delete" class="remove"><?php echo 'Remove';?></button></td>
              <td><input type="hidden" name="un_id" value="<?php echo $row['id']; ?>"></td>
            </tr>
      </div>
    </form>
    
    <?php }}   ?>
    </tbody>
        </table>
        <!------table contact end ----->
  </section>
 
  
</section>
<section class="w-100 d-flex justify-content-start align-items-start m-5 ">
<!------insert start----->
<div class="container-fluid" id="insert">
      <h2 class=" ">Insert House</h2>
      <p class="">in this section you can insert details on houses & projects that  customers can watch <a href="../house_list.php#list">here</a></p>

      <div class="col-lg  ">

        <form action="insert.php" class="d-block mt-3" method="post" enctype="multipart/form-data">

          <div class="col-lg m-2">
          <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" value="">
          </div>

          <div class="col-lg m-2">
          <input type="text" name="name" placeholder="name the image">
          </div>

          <div class="col-lg m-2">
          <input  class="w-50" type="text" name="text" id="" placeholder="text about the house">
          </div>

          <div class="col-lg m-2">
          <input  class="w-50" type="date" name="date" id="">
          </div>

          <div class="col-lg m-2">
          <input  class="w-50" type="number" name="bd" id="" placeholder="bd">
          </div>

          <div class="col-lg m-2">
          <input  class="w-50" type="number" name="br" id="" placeholder="br">
          </div>
          
          <div class="col-lg m-2">
          <input  class="w-50" type="number" name="price" id="" placeholder="price">
          </div>

          <div class="col-lg m-2">
          <input  class="w-50" type="text" name="county" id="" placeholder="county">
          </div>

          <div class="col-lg m-2">
          <input  class="btn btn-primary w-25 " type="submit" value="submit">
          </div>
        </form>
      </div>

      </div>

<!------insert end----->
</section>

<section class="w-100 m-5">
  <!------remove house fro list start----->
<div class="container-fluid mt-5" id="delete-house">
<h2 id="house_delete_list">Delete House</h2>
<p>delete houses from the list found inside <a href="../house_list.php">here.</a></p>
      <div class="table-responsive" >
      <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">bd</th>
              <th scope="col">br</th>
              <th scope="col">price</th>
              <th scope="col">date</th>
              <th scope="col">text</th>
              <th scope="col">county</th>
              <th scope="col">name</th>
              <th scope="col">image</th>
            </tr>
          </thead>
          <tbody>
    <?php
        $sql= "SELECT * FROM `house`";
        $result = mysqli_query($conn,$sql);
        $datas = Array();
        if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $datas[] = $row;
        $id   =  $row['id'];
        $name = $row['name']."<br>";
        $br = $row['br'];
        $bd = $row['bd'];
        $price = $row['price'];
        $county = $row['county'];
        $date = $row['date'];
        $text = $row['text'];
        $image = $row['image'];
   
   
   
    ?>
            <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['bd'];?></td>
              <td><?php echo $row['br'];?></td>
              <td><?php echo $row['price'];?></td>
              <td><?php echo $row['date'];?></td>
              <td><?php echo $row['text'];?></td>
              <td><?php echo $row['county'];?></td>
              <td><?php echo $row['name'];?></td>
              <td> <img src="img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
              <form action="remove.php" method="post"> 
              <td><button class="btn btn-primary" type="submit" name="delete" class="remove">Remove</button></td>
              <td><input type="hidden" name="house_id" value="<?php echo $row['id']; ?>"></td>
            </tr>
      </div>
    </form>
    <?php }}   ?>
    </tbody>
        </table>
</div>
</section>


<section class="w-100 m-5" id="admin-users">
  <h2 id="contact" class="">Admin users</h2>
      <p class="">in this section you can watch and delete and Add Admin users as your wish! </p>
      <div class="table-responsive" >
      <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">full name</th>
              <th scope="col">user name</th>

            </tr>
          </thead>
          <tbody>
    <?php
        $sql= "SELECT * FROM `users`";
        $result = mysqli_query($conn,$sql);
        $datas = Array();
        if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $datas[] = $row;
        $id   =  $row['id'];
        $admin_name = $row['admin_admin_name']."<br>";
        $user_name = $row['user_name'];
        $password = $row['password'];
   
    ?>
            <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['admin_name'];?></td>
              <td><?php echo $row['user_name'];?></td>
              <form action="remove.php" method="post"> 
              <td><button class="btn btn-primary" type="submit" name="delete" class="remove">Remove</button></td>
              <td><input type="hidden" name="admin_id" value="<?php echo $row['id']; ?>"></td>
            </tr>
      </div>
    </form>
    
    <?php }}   ?>
    </tbody>
        </table>
        <!------table contact end ----->
  </section>




  <section class="w-100 d-flex justify-content-start align-items-start m-5 ">
<!------insert start----->
<div class="container-fluid" id="insert-admin">
      <h2 class=" ">Insert admin users</h2>
      <p class="">in this section you can insert details of admin users.</p>

      <div class="col-lg  ">

        <form action="insert-admin.php" class="d-block mt-3" method="post" enctype="multipart/form-data">


          <div class="col-lg m-2">
          <input type="text" class="w-50" name="admin_name" placeholder="Enter your name">
          </div>

          <div class="col-lg m-2">
          <input type="text" class="w-50" name="uname" placeholder="Enter your user name">
          </div>

          <div class="col-lg m-2">
          <input type="password" class="w-50" name="password" placeholder="Enter your password">
          </div>

          <div class="col-lg m-2">
          <input type="password" class="w-50" name="re_password" placeholder="Enter your password again">
          </div>

          <div class="col-lg m-2">
          <input type="submit" class="btn btn-primary w-25 " name="sbmt" value="submit">
          </div>

        </form>
      </div>

      </div>

<!------insert end----->
</section>




<section class="w-100 d-flex justify-content-start align-items-start m-5 " id="insert-lesson">
<!------insert start----->
<div class="container-fluid" id="">
      <h2 class=" ">Insert lesson</h2>
      <p class="">in this section you can insert details on houses & projects that  customers can watch <a href="../house_list.php#list">here</a></p>

      <div class="col-lg  ">

      <form action="upload.php"
	       method="post"
	       enctype="multipart/form-data">

	 	<input type="file"
	 	       name="my_video">


	 	
           <input type="text" name="lesson" placeholder="Enter the name of the lesson" id="">
           <input type="text" name="sum" placeholder="Enter sum of the video" id="">

           <input type="submit"
	 	       name="submit" 
	 	       value="Upload">

	 </form>
      </div>

      </div>

<!------insert end----->
</section>







 <!------Email Subcribers start----->
 <section class="w-100 m-5" id="email-sub">
  <h2 id="contact" class="">Email Subcribers</h2>
      <p class="">in this section you can watch and delete Email Subcribers that signed <a href="../index.php#footer">here</a> </p>
      <div class="table-responsive" >
      <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Email</th>

            </tr>
          </thead>
          <tbody>
    <?php
        $sql= "SELECT * FROM `email`";
        $result = mysqli_query($conn,$sql);
        $datas = Array();
        if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)){
        $datas[] = $row;
        $id   =  $row['id'];
        $name = $row['email']."<br>";
   
    ?>
            <tr>
              <td><?php echo $row['id'];?></td>
              <td><?php echo $row['email'];?></td>
              <form action="remove.php" method="post"> 
              <td><button class="btn btn-primary" type="submit" name="delete" class="remove">Remove</button></td>
              <td><input type="hidden" name="em_id" value="<?php echo $row['id']; ?>"></td>
            </tr>
      </div>
    </form>
    
    <?php }}   ?>
    </tbody>
        </table>
 <!------Email Subcribers end----->
 </section>

    </main>
  </div>
</div>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Royal Spring</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="../index.php#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">

      <div class="copyright-wrap d-md-flex py-4">
        <div class="me-md-auto text-center text-md-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Royal Spring LLC</a></span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/techie-free-skin-bootstrap-3/ -->
          
              BackEnd by <a href="https://guideline.website/">GuideLine</a> <br>  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>

             
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
          <a href="../index.php#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="../index.php#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="../index.php#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="../index.php#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="../index.php#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="index.php#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
  </body>
            </html>
