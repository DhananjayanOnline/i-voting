<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img-admin/favicon.png">

  <title>Admin Dashboard</title>

  <!-- Favicons -->
  <link href="assets/img/Voting-hero.jpg" rel="icon">
  <link href="assets/img/Voting-hero.jpg" rel="apple-touch-icon">

  <!-- Bootstrap CSS -->
  <link href="css-admin/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css-admin/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css-admin/elegant-icons-style.css" rel="stylesheet" />
  <link href="css-admin/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets-admin/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets-admin/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets-admin/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css-admin/owl.carousel.css" type="text/css">
  <link href="css-admin/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css-admin/fullcalendar.css">
  <link href="css-admin/widgets.css" rel="stylesheet">
  <link href="css-admin/style.css" rel="stylesheet">
  <link href="css-admin/style-responsive.css" rel="stylesheet" />
  <link href="css-admin/xcharts.min.css" rel=" stylesheet">
  <link href="css-admin/jquery-ui-1.10.4.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>

<?php

  session_start();
  if(!isset($_SESSION['email'])){
  header('location:login-admin.php');
  }

?>

  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="glyphicon glyphicon-align-justify"></i></div>
      </div>
      <!--logo start-->
      <a href="index.php" class="logo">i - <span class="lite">Voting</span></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">

          
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <span class="profile-ava">
                                  <img style="width: 10%; margin-left: 60%;" alt="" src="img-admin/admin logo.png">
                              </span>
                              <span class="username">Admin 1</span>
                              <b class="caret"></b>
                          </a>
              <ul class="dropdown-menu extended logout">
                
  
                <li>
                  <a href="admin-logout.php"> Log Out</a>
                </li>
                
              </ul>
            </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="index-admin.php">
                          <span>Dashboard</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="nom_request.php">
                          <span>Nomination Request</span>
                      </a>
          </li>
          <li class="active">
            <a class="" href="registration-admin.php">
                          <span>Registration</span>
                      </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"> Dashboard</h3>
            <ol class="breadcrumb">
              <li><a href="index-admin.html">Home</a></li>
              <li>Dashboard</li>
            </ol>
          </div>
        </div>

        

        </div>
        <!--/.row-->


       


        <!-- Today status end -->



        <div class="row">

          <div class="col-lg-9 col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h2><strong>Voting Details</strong></h2>
                <div class="panel-actions">
                  <a href="index-admin.html" class="btn-setting"></a>
                  <a href="index-admin.html" class="btn-minimize"></a>
                  <a href="index-admin.html" class="btn-close"></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable countries">
                <h4>BA English</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>

                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>BA History</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>BA Malayalam</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>BA Economics</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>BA English Triple Main (Self Financing)</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>B.Sc Physics</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>B.Sc Chemistry</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>B.Sc Botony</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>B.Sc Zoology</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>B.Sc Mathematics</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>B.Sc Family and Community Science</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>B.Sc Botony and Biotechnology (Self Financing)</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>B.com Finance and Taxation</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>B.com Finance and Taxation (Self Financing)</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>B.Voc Information Technology</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>B.Voc Travel,Tourism and Logistics Management</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>


                <table class="table bootstrap-datatable countries">
                  <br>
                <h4>BCA (Self Financing)</h4>
                <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                        <th style="text-align: right;">Votes</th>
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td style="text-align: right;"><?php echo $ro["DEPARTMENT"]; ?></td>                                                
                            <td></td>
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
                  
                  <tbody>
              
                </table>

              </div>

            </div>

          </div>
          <!--/col-->
          
          
          <!--/col-->
          
          <!--/col-->

        </div>



        <!-- statics end -->




        <!-- project team & activity start -->
        

        
        <!-- project team & activity end -->

      </section>
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
         
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js-admin/jquery.js"></script>
  <script src="js-admin/jquery-ui-1.10.4.min.js"></script>
  <script src="js-admin/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js-admin/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js-admin/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js-admin/jquery.scrollTo.min.js"></script>
  <script src="js-admin/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets-admin/jquery-knob/js/jquery.knob.js"></script>
  <script src="js-admin/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets-admin/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js-admin/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js-admin/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets-admin/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js-admin/calendar-custom.js"></script>
    <script src="js-admin/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js-admin/jquery.customSelect.min.js"></script>
    <script src="assets-admin/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js-admin/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js-admin/sparkline-chart.js"></script>
    <script src="js-admin/easy-pie-chart.js"></script>
    <script src="js-admin/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js-admin/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js-admin/xcharts.min.js"></script>
    <script src="js-admin/jquery.autosize.min.js"></script>
    <script src="js-admin/jquery.placeholder.min.js"></script>
    <script src="js-admin/gdp-data.js"></script>
    <script src="js-admin/morris.min.js"></script>
    <script src="js-admin/sparklines.js"></script>
    <script src="js-admin/charts.js"></script>
    <script src="js-admin/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
