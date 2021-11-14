<!DOCTYPE html>
<html lang="en">

<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



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

               
<?php

if(isset($_POST['verify'])){
    $_SESSION["uprn"]=$_POST["chk"];
    //$st="select * from candidate_registration where UPRN='{$_SESSION['uprn']}'";
    //if($con->query($st))
    //{
    header('location:update.php');
    //}
}

?>
    <!-- container section start -->
    <section id="container" class="">
  
  
      <header class="header dark-bg">
        
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="glyphicon glyphicon-align-justify"></i></div>
      </div>
  
        <!--logo start-->
        <a href="index.php" class="logo">i-vs <span class="lite">Admin</span></a>
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
              <h3 class="page-header"> Nomination Request</h3>
              <ol class="breadcrumb">
                <li><a href="index-admin.html">Home</a></li>
                <li>Nomination Request</li>
              </ol>
            </div>
          </div>
        </section>

        <section class="wrapper">
            <div class="row">

                <div class="col-lg-9 col-md-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h2><strong>Candidate Requests</strong></h2>
                      <div class="panel-actions">
                        <a href="index-admin.html" class="btn-setting"></a>
                        <a href="index-admin.html" class="btn-minimize"></a>
                        <a href="index-admin.html" class="btn-close"></a>
                      </div>
                    </div>
                    <div class="table-responsive">
                     
                    <table class="table" style="height:50px;width:50px">
                    <thead>
                          <tr>
                            <th></th>
                            <th style="height:50px;width:50px">Candidate Name</th>
                            <th style="height:50px;width:50px">Department</th>
                            <th style="height:50px;width:50px">DOB</th>
                            <th style="height:50px;width:50px">Phone</th>
                            <th style="height:50px;width:50px">Year</th>
                            <th style="height:50px;width:50px">Attendence Percentage</th>
                            <th style="height:50px;width:50px">Year of Admission</th>
                            <th style="height:50px;width:50px">Year of Passing Intermediate</th>
                            <th style="height:50px;width:50px">Exam Failed</th>
                            <th style="height:50px;width:50px">Supplementary Exam</th>
                            <th style="height:50px;width:50px">Any Disciplinary Action</th>
                            <th style="height:50px;width:50px">Any Criminal Case</th>
                            <th style="height:50px;width:50px"></th>
                          </tr>
                        </thead>
                      <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select * from candidate_registration where VERIFY = 'no'";
                        $res=$con->query($s);
                        if($res->num_rows>0)
                        {
                          while($ro=$res->fetch_assoc())
                          { ?>

                       
                    <form action="" method="post">
                        <tbody>
                          <tr>
                            <td><img src="assets/img/candidates/<?php echo $ro["PHOTO"]; ?>" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>
                            <td><?php echo $ro["DEPARTMENT"]; ?></td>
                            <td><?php echo $ro["DOB"]; ?></td>
                            <td><?php echo $ro["PHONENUMBER"]; ?></td>
                            <td><?php echo $ro["CURRENT_YEAR"]; ?></td>
                            <td><?php echo $ro["PERCENTAGEOFATTENDENCE"]; ?></td>
                            <td><?php echo $ro["YEAROFADMISSION"]; ?></td>
                            <td><?php echo $ro["YEAROFPASSINGINTERMEDIATE"]; ?></td>
                            <td><?php echo $ro["FAILEDEXAM"]; ?></td>
                            <td><?php echo $ro["SUPPLEMENTARYEXAM"]; ?></td>
                            <td><?php echo $ro["DISCIPLINARYACTION"]; ?></td>
                            <td><?php echo $ro["CRIMINALCASE"]; ?></td>                            
                            <td><input type="hidden" name="chk" value="<?php echo $ro['C_UPRN']; ?>"></td>
                            <td style="text-align: right;">
                                <button class="button button1" type="submit" name="verify">Accept</button>                                
                            </td>
                          </tr>
                          </tbody>
                    </form>

                         <?php 
                          }
                          }
                          else{
                            echo "No Entry";
                          }


                        ?>
                    
                      </table>
                        
         

                    </div>
      
                  </div>
      
                </div>
                <!--/col-->
                
                
                <!--/col-->
                
                <!--/col-->
      
              </div>
        </section>
    </section>