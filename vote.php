<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cast Your Vote</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/Voting-hero.jpg" rel="icon">
  <link href="assets/img/Voting-hero.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/modal-video/css/modal-video.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: eStartup - v2.2.1
  * Template URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <style>
    #myButton1{
      background-color: #004b88;
    }

    #myButton1 :hover {
		  color: #e51e26;
		}
    
  </style>

</head>

<body>

  <?php

  session_start();
  if(!isset($_SESSION['email'])){
    header('location:index-login.php');
  }

  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="index.php"><span>i-</span>Voting</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
        <li class="menu-active"><a href="index.php">Home</a></li>
        <li><a href="index-nomination.php">Nomination</a></li>
        <li><a href="list-candidate.php">Candidate List</a></li>
        <li><a href="Result.php">View Result</a></li>
        <li><a href="login-admin.php">Admin Login</a></li>
        </ul>
    </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="padd-section text-center">
      <br>
      <br>
      <h1 style="text-align: center;" ><span>Cast your </span>Vote </h1>
      <br>
      <br>

      
      <div class="holdingcontainer">
      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = '{$_SESSION["dept"]}'  and CURRENT_YEAR = '{$_SESSION["year"]}'";
                      $res=$con->query($s);
                      if($res->num_rows>0)
                      {
                        while($ro=$res->fetch_assoc())
                        { ?>

        <div class="internalcontainerL" data-aos="zoom-in" data-aos-delay="200">
          <img class="dasimages" src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" width="100%">
          <div class="card-body">
            <p class="card-text"><h4><?php echo $ro["NAME"]; ?></h4></p>
            <p class="card-text"></p>
            <hr>
            <form action="vote-status.php" method="POST">
              <input type="hidden" value="<?php echo $ro['C_UPRN']; ?>" name="cand">
              <input type="hidden" value="<?php echo $_SESSION['email']; ?>" name="chk">
              <input onclick="this.value='Voted'" class="btn btn-success" type="submit" value="Vote" name="vote" id="myButton1" />
            <hr>
            </form>
          </div>
        </div>
    
      <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>


      

    </section><!-- End Get Started Section -->
   </main><!-- End #main -->
    <section>
      <center>
          <div id="vote-submit">
            <a href="logout.php" class="btn-get-started scrollto">Logout</a>
        </div>
      </center>
    </section>

  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">

            <a style="margin-bottom: 50px;" class="navbar-brand" href="#">Internet Voting System</a>
            

          </div>
        </div>


      </div>
    </div>

    <!--
    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights eStartup. All rights reserved.</p>
        <div class="credits">
          
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
        
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>
    -->

  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/modal-video/js/modal-video.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>