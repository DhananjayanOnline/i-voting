<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img-admin/favicon.png">

  <title>Admin Login</title>

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
  <link href="css-admin/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css-admin/style.css" rel="stylesheet">
  <link href="css-admin/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- =======================================================
      Theme Name: NiceAdmin
      Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
    <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">



    <style>
	
	h7{
		font-family: 'Lato', sans-serif;
	}

	body{
		padding: 1cm !important;
	}


	/*--------------------------------------------------------------
		# Navigation Menu
		--------------------------------------------------------------*/
		/* Nav Menu Essentials */
		.nav-menu, .nav-menu * {
		margin: 0;
		padding: 0;
		list-style: none;
		}

		.nav-menu ul {
		position: absolute;
		display: none;
		top: 100%;
		left: 0;
		z-index: 99;
		}

		.nav-menu li {
		position: relative;
		white-space: nowrap;
		}

		.nav-menu > li {
		float: left;
		}

		.nav-menu li:hover > ul,
		.nav-menu li.sfHover > ul {
		display: block;
		}

		.nav-menu ul ul {
		top: 0;
		left: 100%;
		}

		.nav-menu ul li {
		min-width: 180px;
		}

		/* Nav Menu Arrows */
		.sf-arrows .sf-with-ul {
		padding-right: 22px;
		}

		.sf-arrows .sf-with-ul:after {
		content: "\f107";
		position: absolute;
		right: 8px;
		margin-top: 1px;
		font-family: FontAwesome;
		font-style: normal;
		font-weight: normal;
		}

		.sf-arrows ul .sf-with-ul:after {
		content: "\f105";
		}

	/* Nav Meu Container */
		#nav-menu-container {
		float: right;
		margin: 0 0 0 0;
		}

		@media (max-width: 1024px) {
		#nav-menu-container {
			display: none;
		}
		}

		/* Nav Meu Styling */
		.nav-menu a {
		padding: 8px 8px;
		text-decoration: none;
		display: inline-block;
		color: #007aff;
		font-family: "Roboto", sans-serif;
		font-weight: 400;
		font-size: 14px;
		outline: none;
		letter-spacing: 0;
		transition: 0.3s;
		
		}


		.nav-menu li:hover > a, .nav-menu > .menu-active > a {
		color: #3e4061;
		}

		.nav-menu > li {
		margin-left: 10px;
		}

		.nav-menu ul {
		margin: 0;
		padding: 10px;
		box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
		background: #fff;
		}

		.nav-menu ul li {
		transition: 0.3s;
		}

		.nav-menu ul li a {
		padding: 5px 10px;
		color: #333;
		transition: 0.3s;
		display: block;
		font-size: 14px;
		text-transform: none;
		}

		.nav-menu ul li:hover > a {
		color: #004b88;
		}

		.nav-menu ul ul {
		margin: 0;
		}


		/* Mobile Nav Toggle */
		#mobile-nav-toggle {
		position: fixed;
		right: 0;
		top: 0;
		z-index: 999;
		margin: 4px 20px 0 0;
		border: 0;
		background: none;
		font-size: 24px;
		display: none;
		transition: all 0.4s;
		outline: none;
		cursor: pointer;
		}

		#mobile-nav-toggle i {
		color: #555;
		font-size: 24px;
		}

		@media (max-width: 1024px) {
		#mobile-nav-toggle {
			display: inline;
		}
		}

		/* Mobile Nav Styling */
		#mobile-nav {
		position: fixed;
		top: 0;
		padding-top: 18px;
		bottom: 0;
		z-index: 998;
		background: rgba(52, 59, 64, 0.9);
		left: -260px;
		width: 260px;
		overflow-y: auto;
		transition: 0.4s;
		}

		#mobile-nav ul {
		padding: 0;
		margin: 0;
		list-style: none;
		}

		#mobile-nav ul li {
		position: relative;
		}

		#mobile-nav ul li a {
		color: #fff;
		font-size: 14px;
		overflow: hidden;
		padding: 6px 22px 6px 15px;
		position: relative;
		text-decoration: none;
		width: 100%;
		display: block;
		outline: none;
		letter-spacing: 0;
		}

		#mobile-nav ul li a:hover {
		color: #fff;
		}

		#mobile-nav ul li li {
		padding-left: 30px;
		}

		#mobile-nav ul .menu-has-children i {
		position: absolute;
		right: 0;
		z-index: 99;
		padding: 15px;
		cursor: pointer;
		color: #fff;
		}

		#mobile-nav ul .menu-has-children i.fa-chevron-up {
		color: #004b88;
		}

		#mobile-nav ul .menu-active a {
		color: #004b88;
		}

		#mobile-body-overly {
		width: 100%;
		height: 100%;
		z-index: 997;
		top: 0;
		left: 0;
		position: fixed;
		background: rgba(52, 59, 64, 0.9);
		display: none;
		}

		/* Mobile Nav body classes */
		body.mobile-nav-active {
		overflow: hidden;
		}

		body.mobile-nav-active #mobile-nav {
		left: 0;
		}

		body.mobile-nav-active #mobile-nav-toggle i {
		color: #fff;
		}


		#header {	
				
			position: fixed;
			left: 0;
			top: 0;
			right: 0;
			z-index: 3;
			transition: all 0.5s ease;
			padding: 25px 70px;
			}

			#header #logo {
			padding: 6px 0 0 0;
			}

			#header #logo h1 {
			color: #505050;
			font-family: "Philosopher", sans-serif;
			font-size: 26px;
			font-weight: 500;
			letter-spacing: 1px;
			margin: 0;
			}

			#header #logo h1 a {
			color: #555;
			line-height: 1;
			display: inline-block;
			text-decoration: none;
			}

			#header #logo h1 a span {
			color: #004b88;
			}

			#header #logo img {
			padding: 0;
			margin: 0;
			}

			#header.header-scrolled {
			background: #fff;
			box-shadow: 0 3px 7px rgba(0, 0, 0, 0.1);
			padding: 10px 0;
			}

			.wrap-login100{
				padding-top: 100px;
			}

</style>
</head>

<body class="login-img3-body">

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
        <li><a href="index.php">Home</a></li>
        <li><a href="index-nomination.php">Nomination</a></li>
        <li><a href="list-candidate.php">Candidate List</a></li>
        <li><a href="Result.php">View Result</a></li>
        <li><a href="login-admin.php">Admin Login</a></li>
        </ul>
    </nav>
	</div>
  	</header><!-- End Header -->

  <div class="container">

    <form class="login-form" action="admin-validation.php" style="margin-top: 100px"; method="post">
      <div class="login-wrap">
        <h2 style="margin-left: 27%;">Admin Login</h2>
        <br>
        <br>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" class="form-control" placeholder="Email ID" name="email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right"> <a href="#"> Forgot Password?</a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="signin">Login</button>
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
