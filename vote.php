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

            <a class="navbar-brand" href="#">i-Voting System</a>
            <p>An Internet voting system (i-Voting) is a web based system that allows 
              groups to securely conduct votes and elections. With i-Voting technology, votes are 
              collected, counted and managed in an automated fashion</p>
            <a class="navbar-brand" href="https://cmscollege.ac.in/"><h4 style="color:white";>CMS College Kottayam <br><h5 style="color:white";>(AUTONOMOUS)</h5></h4></a>
          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>ACADEMICS</h4>

            <ul class="list-unstyled">
              <li><a href="https://cmscollege.ac.in/syllabus.html">Curriculum</a></li>
              <li><a href="http://cmscollege.ac.in/examination.html">Examinations</a></li>
              <li><a href="http://cmscollege.ac.in/all-departments-list.html">All Departments</a></li>
              <li><a href="https://services.cmscollege.ac.in/Feedback/Feedback/Home">Faculty Evaluation</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>ADMISSIONS</h4>

            <ul class="list-unstyled">
              <li><a href="https://cmscollege.ac.in/notification-2.html">Notifications</a></li>
              <li><a href="https://cmscollege.ac.in/programs-offered.html">Programs Offered</a></li>
              <li><a href="http://cmscollege.ac.in/online-admission.html">UG Online Admission</a></li>
              <li><a href="http://cmscollege.ac.in/pg-admission.html">PG Online Admission</a></li>
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>FUTURE STUDENTS</h4>

            <ul class="list-unstyled">
              <li><a href="https://cmscollege.ac.in/doctoral-programs.html">Doctoral Programs</a></li>
              <li><a href="https://cmscollege.ac.in/post-graduate-programs.html">Postgraduate Programs</a></li>
              <li><a href="http://cmscollege.ac.in/ug-programmes-offered.html">Undergraduate Programmes</a></li>              
            </ul>

          </div>
        </div>

        <div class="col-sm-6 col-md-3 col-lg-2">
          <div class="list-menu">

            <h4>CAMPUS LIFE</h4>

            <ul class="list-unstyled">
              <li><a href="https://cmscollege.ac.in/complaints-and-grievances.html">Complaints and Grievances</a></li>
              <li><a href="https://cmscollege.ac.in/students-support-cms.html">Students Support @CMS</a></li>
              <li><a href="http://cmscollege.ac.in/right-to-information-rti.html">Right to Information (RTI)</a></li>
              <li><a href="https://cmscollege.ac.in/campus-placements.html">Campus Placements</a></li>
              <li><a href="http://cmscollege.ac.in/anti-ragging-cell.html">Anti Ragging Cell</a></li>
            </ul>

          </div>
        </div>

      </div>
    </div>

    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights Internet Voting System. All rights reserved.</p>
        <div class="credits">
          Designed by Dhananajayan H
        </div>
      </div>
    </div>

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