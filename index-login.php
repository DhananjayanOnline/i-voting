<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">

	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor-login/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts-login/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts-login/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor-login/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor-login/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor-login/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor-login/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor-login/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css-login/util.css">
	<link rel="stylesheet" type="text/css" href="css-login/main.css">
<!--===============================================================================================-->

<!-- Favicons -->
<link href="assets/img/Voting-hero.jpg" rel="icon">
<link href="assets/img/Voting-hero.jpg" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

<style>
	
	h7{
		font-family: 'Lato', sans-serif;
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
		color: #ececed;
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
			color: #fff;
			font-family: "Philosopher", sans-serif;
			font-size: 50px;
			font-weight: 700;
			letter-spacing: 1px;
			margin: -29px;
			}

			#header #logo h1 a {
			color: #fff;
			line-height: 1;
			display: inline-block;
			text-decoration: none;
			}

			#header #logo h1 a span {
			color: #fff;
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
        <li><a href="index.php">Home</a></li>
        <li><a href="index-nomination.php">Nomination</a></li>
        <li><a href="list-candidate.php">Candidate List</a></li>
        <li><a href="Result.php">View Result</a></li>
        <li><a href="login-admin.php">Admin Login</a></li>
        </ul>
    </nav>
	</div>
  	</header><!-- End Header -->
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" action="user-validation.php" method="post">
					<span class="login100-form-title p-b-43">
						<h1>Login</h1>
					</span>
					
					<div class="wrap-input100 rs1 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="email">
						<span class="label-input100" >Email ID</span>
					</div>
					
					
					<div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password">
						<span class="label-input100">Password</span>
					</div>

					<div class="container-login100-form-btn">
						
						<button class="login100-form-btn" type="submit" name="signin">
							<h7>Sign in</h7>
						</button>

						
					</div>
					
					<div class="text-center w-full p-t-23">
						<a href="#" class="txt1">
							Forgot password?
						</a>
						<p class="text-center" style="color: aliceblue;">Don't have account? <a href="index-registration.php" class="txt1">Register as a new user</a></p>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>