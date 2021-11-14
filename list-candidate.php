<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Candidate List</title>
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
</head>

<body>

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
        
        <h1 style="text-align: center;" ><span>Candidate List</h1>

        <section id="get-started" class="padd-section ">

            <h1 style="text-align: center;" ><span>Candidate List</h1>
            <div class="container">
                <h2>BA English</h2>
                
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA English'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                  </table>
            </div>

            <div class="container">
                <h2>BA History</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA History'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                  </table>
            </div>

            <div class="container">
                <h2>BA Malayalam</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA Malayalam'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                  </table>
            </div>

            <div class="container">
                <h2>BA Economics</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA Economics'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                  </table>
            </div>

            <div class="container">
                <h2>BA English Triple Main (Self Financing)</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA English Triple Main'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                  </table>
            </div>

            <div class="container">
                <h2>B.Sc Physics</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Physics'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                  </table>
            </div>

            <div class="container">
                <h2>B.Sc Chemistry</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Chemistry'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                </table>
             </div>

             <div class="container">
                <h2>B.Sc Botony</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Botony'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                </table>
             </div>

             <div class="container">
                <h2>B.Sc Zoology</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Zoology'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                </table>
             </div>

             <div class="container">
                <h2>B.Sc Mathematics</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Mathematics'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                </table>
             </div>

             <div class="container">
                <h2>B.Sc Family and Community Science</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Family and Community Science'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                </table>
             </div>

             <div class="container">
                <h2>B.Sc Botony and Biotechnology (Self Financing)</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Botony and Biotechnology'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                </table>
             </div>

             <div class="container">
                <h2>B.com Finance and Taxation</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.com Finance and Taxation'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                </table>
             </div>

             <div class="container">
                <h2>B.com Finance and Taxation (Self Financing)</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.com Finance and Taxation (Self Financing)'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                </table>
             </div>

             <div class="container">
                <h2>B.Voc Information Technology</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Voc Information Technology'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                </table>
             </div>

             <div class="container">
                <h2>B.Voc Travel,Tourism and Logistics Management</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Voc Travel,Tourism and Logistics Management'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                </table>
             </div>

             <div class="container">
                <h2>BCA (Self Financing)</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BCA'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody style="color: darkslateblue;">
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            </td>
                          </tr>
                        </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "<CENTER><H4> No Entry </H4></CENTER>";
                          }


                        ?>
                </table>
             </div>

        </section>
    </main>

    </main>

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
</body>