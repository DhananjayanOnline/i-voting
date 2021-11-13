<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Result</title>
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
        
        <h1 style="text-align: center;" ><span>Result</h1>

        <section id="get-started" class="padd-section ">

            <h1 style="text-align: center;" ><span>Result</h1>
            <div class="container">
                <h2>BA English</h2>
                
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status ,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA English' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA English' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA English' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA History' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA History' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA History' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA Economics' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA Economics' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA Economics' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA English Triple Main' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA English Triple Main' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BA English Triple Main' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Physics' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Physics' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Physics' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Chemistry' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Chemistry' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Chemistry' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Botony' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Botony' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Botony' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                 
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Zoology' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Zoology' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Zoology' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Mathematics' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Mathematics' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Mathematics' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Family and Community Science' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Family and Community Science' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Family and Community Science' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Botony and Biotechnology' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Botony and Biotechnology' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Sc Botony and Biotechnology' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.com Finance and Taxation' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.com Finance and Taxation' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.com Finance and Taxation' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.com Finance and Taxation (Self Financing)' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.com Finance and Taxation (Self Financing)' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.com Finance and Taxation (Self Financing)' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Voc Information Technology' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Voc Information Technology' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Voc Information Technology' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Voc Travel,Tourism and Logistics Management' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Voc Travel,Tourism and Logistics Management' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'B.Voc Travel,Tourism and Logistics Management' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


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
                        <th style="text-align: right;">Votes</th>
                      </tr>
                    </thead>

                    <!--First Year-->
                    <?php
                      
                        $con = mysqli_connect('localhost','root','123456');

                         mysqli_select_db($con, 'ivs_data_base');

                        $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BCA' and CURRENT_YEAR= 'first year'";
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
                            <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                        <!--end of First Year-->

                        
                        <!--Second Year-->
                        <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BCA' and CURRENT_YEAR= 'second year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Second Year-->


                      <!--Third Year-->
                      <?php
                      
                      $con = mysqli_connect('localhost','root','123456');

                       mysqli_select_db($con, 'ivs_data_base');

                      $s = "select MAX(STATUS) AS max_status ,NAME,CURRENT_YEAR,DEPARTMENT from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'BCA' and CURRENT_YEAR= 'third year'";
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
                          <td style="text-align: right;"><?php echo $ro["max_status"]; ?></td>                                                
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
                      <!--end of Third Year-->


                  </table>
             </div>

        </section>
    </main><!-- End #main -->

  

  <!-- ======= Footer ======= -->
  <footer class="footer">
    
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