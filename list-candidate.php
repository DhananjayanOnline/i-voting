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
                <h2>BCA</h2>
                
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
                            <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" alt="none" style="height:58px; margin-top:-2px;"></td>
                            <td><?php echo $ro["NAME"]; ?></td>      
                            <td><?php echo $ro["SEMESTER"]; ?></td>
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
                <h2>Bsc Physics</h2>
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

                        $s = "select * from candidate_registration where VERIFY = 'yes' and DEPARTMENT = 'Bsc Physics'";
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
                            <td><?php echo $ro["SEMESTER"]; ?></td>
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
                    <tbody style="color: darkslateblue;">
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Dhananjayan H</td>
                        <td>3rd year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Cyiac</td>
                        <td>3rd Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Indu S</td>
                        <td>2nd Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Tony pater</td>
                        <td>1st Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                    </tbody>
                  </table>
            </div>

            <div class="container">
                <h2>Bsc Mathematics</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <tbody style="color: darkslateblue;">
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Dhananjayan H</td>
                        <td>3rd year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Cyiac</td>
                        <td>3rd Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Indu S</td>
                        <td>2nd Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Tony pater</td>
                        <td>1st Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                    </tbody>
                  </table>
            </div>

            <div class="container">
                <h2>BA Ecomomics</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <tbody style="color: darkslateblue;">
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Dhananjayan H</td>
                        <td>3rd year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Cyiac</td>
                        <td>3rd Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Indu S</td>
                        <td>2nd Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Tony pater</td>
                        <td>1st Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                    </tbody>
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
                    <tbody style="color: darkslateblue;">
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Dhananjayan H</td>
                        <td>3rd year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Cyiac</td>
                        <td>3rd Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Indu S</td>
                        <td>2nd Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Tony pater</td>
                        <td>1st Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                    </tbody>
                  </table>
            </div>

            <div class="container">
                <h2>B.com</h2>
                <table class="table bootstrap-datatable countries" style="font-family: monospace; color:darkslategray">
                    <thead>
                      <tr>
                        <th></th>
                        <th>Name of the Candidate</th>
                        <th>Year</th>
                        <th style="text-align: right;">Department</th>
                      </tr>
                    </thead>
                    <tbody style="color: darkslateblue;">
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Dhananjayan H</td>
                        <td>3rd year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Cyiac</td>
                        <td>3rd Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Indu S</td>
                        <td>2nd Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                      <tr>
                        <td><img src="https://www.bncollege.co.in/master_cp/upload_users/9274demo-male.png" style="height:58px; margin-top:-2px;"></td>
                        <td>Tony pater</td>
                        <td>1st Year</td>
                        <td style="text-align: right;">BCA</td>
                      </tr>
                    </tbody>
                  </table>
            </div>

        </section>
    </main>

    </main>
</body>