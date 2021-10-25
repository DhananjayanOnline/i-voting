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

<body class="login-img3-body">

<?php

  session_start();
  if(!isset($_SESSION['email'])){
  header('location:login-admin.php');
  }

?>

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
              <div class="log-arrow-up"></div>

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
            <h3 class="page-header"> Registration</h3>
            <ol class="breadcrumb">
              <li><a href="index-admin.html">Home</a></li>
              <li>Registration</li>
            </ol>
          </div>
        </div>

        

        </div>
        <!--/.row-->


  <div class="container">

    <form class="login-form" action="admin-registration.php" style="margin-top:10px" method="post">
      <div class="login-wrap">
        <h3 style="margin-left: 17%;">Admin Registration</h3>
        <br>
        <br>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Username" name="name" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" class="form-control" placeholder="Email ID" name="email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="number" class="form-control" placeholder="Phone Number" name="phone" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Department" name="department" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" placeholder="Designation" name="designation" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        
        <button class="btn btn-info btn-lg btn-block" type="submit">Signup</button>
      </div>
    </form>
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
  </div>


</body>

</html>
