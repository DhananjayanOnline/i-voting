<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Nomination</title>

	<!-- Favicons -->
	<link href="assets/img/Voting-hero.jpg" rel="icon">
	<link href="assets/img/Voting-hero.jpg" rel="apple-touch-icon">
	
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css-nomination/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts-nomination/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css-nomination/style.css"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">


	<style>
      input[type=submit] {
        background-color: #4fab40;
        border: none;
        color: #fff;
        padding: 15px 30px;
        text-decoration: none;
        margin: 4px 2px;
        cursor: pointer;
      }

	input[type=submit] {
	color: #fff;
	text-decoration: none;
    padding: 13px 19px;
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
		color: #4fab40;
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
			background: -webkit-linear-gradient( 136deg, rgb(63,43,150)  0%,rgb(116,235,213) 130%);		
			position: fixed;
			left: 0;
			top: 0;
			right: 0;
			z-index: 3;
			transition: all 0.5s ease;
			padding: 25px 70px;
			}

			#header #logo {
			padding: 8px 0 0 0;
			}

			#header #logo h1 {
			color: #505050;
			font-family: "Philosopher", sans-serif;
			font-size: 20px;
			font-weight: 500;
			letter-spacing: 1px;
			margin: -25px;
			padding-top: 15px;
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


	<div class="page-content">
		<div class="form-v1-content">
			<div class="wizard-form">
		        <form class="form-register" action="nomination-registration.php" method="post" enctype="multipart/form-data">
		        	<div id="form-total">
		        		<!-- SECTION 1 -->
			            <h2>
			            	<p class="step-icon"><span>01</span></p>
			            	<span class="step-text">Peronal Infomation</span>
			            </h2>
			            <section>
			                <div class="inner">
			                	<div class="wizard-header">
									<h3 class="heading">Peronal Infomation</h3>
									
								</div>
								<div class="form-row">
									<div class="form-holder">
										<fieldset>
											<legend>Full Name</legend>
											<input type="text" class="form-control" id="name" name="name" placeholder="Full Name" required>
										</fieldset>
									</div>
									<div class="form-holder">
										<fieldset>
											<legend>UPRN</legend>
											<input type="number" class="form-control" id="uprn" name="uprn" placeholder="UPRN" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Your Email</legend>
											<input type="text" name="email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Phone Number</legend>
											<input type="text" class="form-control" id="phone" name="phone" placeholder="+91 888-999-7777" required>
										</fieldset>
									</div>
								</div>
								<div class="form-row form-row-date">
									<div class="form-holder form-holder-2">
									<fieldset>
											<legend>Date of Birth</legend>
											<input type="date" class="form-control" id="dob" name="dob" placeholder="yyyy-mm-dd" required>
									</fieldset>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<legend>Department</legend>
										<select class="form-control input-border" id="dept" name="dept" placeholder="Department" required>
											<option value="BA English">BA English</option>
											<option value="BA History">BA History</option>
											<option value="BA Malayalam">BA Malayalam</option>
											<option value="BA Economics">BA Economics</option>
											<option value="BA English Triple Main">BA English Triple Main (Self Financing)</option>
											<option value="B.Sc Physics">B.Sc Physics</option>
											<option value="B.Sc Chemistry">B.Sc Chemistry</option>
											<option value="B.Sc Botony">B.Sc Botony</option>
											<option value="B.Sc Zoology">B.Sc Botony</option>
											<option value="B.Sc Mathematics">B.Sc Mathematics</option>
											<option value="B.Sc Family and Community Science">B.Sc Family and Community Science</option>
											<option value="B.Sc Botony and Biotechnology">B.Sc Botony and Biotechnology (Self Financing)</option>
											<option value="B.com Finance and Taxation">B.com Finance and Taxation</option>
											<option value="B.com Finance and Taxation (Self Financing)">B.com Finance and Taxation (Self Financing)</option>
											<option value="B.Voc Information Technology">B.Voc Information Technology</option>
											<option value="B.Voc Travel,Tourism and Logistics Management">B.Voc Travel,Tourism and Logistics Management</option>
											<option value="BCA">BCA (Self Financing)</option>
										</select>
									</div>
									<div class="form-holder form-holder-2">
										<legend>Year</legend>
										<select type="number" class="form-control input-border" id="year" name="year" placeholder="Semester" required>
											<option value="first year">First Year</option>
											<option value="second year">Second Year</option>
											<option value="third year">Third Year</option>
										</select>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<input type="number" class="form-control input-border" id="dept" name="attendence" placeholder="Percentage of Attendence">
									</div>
									<div class="form-holder form-holder-2">
										<input type="number" class="form-control input-border" id="year" name="admission" placeholder="Year of Admission" required>
									</div>
								</div>
								<div class="form-row">
									<div class="form-holder form-holder-2">
										<input type="number" class="form-control input-border" id="intermediate" name="intermediate" placeholder="Year of Passing Intermediate or +2" required>
									</div>
								</div>
								
							</div>
							
			            </section>
						
						
			            <!-- SECTION 3 -->
			            <h2>
			            	<p class="step-icon"><span>02</span></p>
			            	<span class="step-text">Nominee Biography Statement</span>
			            </h2>
			            <section>
							<div class="inner">
								<div class="wizard-header">
									<div class="form-row">
											<label class="form-holder form-holder-2" for="failedexam" style="font-size:small; font-weight:bolder; color: #737273;">Have you ever failed in any examination conducted by CMS College?</label>
											<input type="radio" class="form-control input-border" id="yes" value='yes' name="failed"  required>Yes
											<input type="radio" class="form-control input-border" id="no" value='no' name="failed"  required>No
										</div>
										<div class="form-row">
											<label class="form-holder form-holder-2" for="failedexam" style="font-size:small; font-weight:bolder; color: #737273;"> Have you ever appeared or required to appear in Back/Supplementary Examination?</label>
											<input type="radio" class="form-control input-border" id="yes" value='yes' name="supply"  required>Yes
											<input type="radio" class="form-control input-border" id="no" value='no' name="supply"  required>No
										</div>
										<div class="form-row">
											<label class="form-holder form-holder-2" for="desciplinary" style="font-size:small; font-weight:bolder; color: #737273;"> Has any disciplinary action been taken against you leading to your expulsion/rustication from any of the educational institution attended?</label>
											<input type="radio" class="form-control input-border" id="yes" value='yes' name="disciplinary"  required>Yes
											<input type="radio" class="form-control input-border" id="no" value='no' name="disciplinary"  required>No
										</div>
										<div class="form-row">
											<label class="form-holder form-holder-2" for="criminal" style="font-size:small; font-weight:bolder; color: #737273;"> Have you ever been convicted by any criminal court?</label>
											<input type="radio" class="form-control input-border" id="yes" value='yes' name="criminal"  required>Yes
											<input type="radio" class="form-control input-border" id="no" value='no' name="criminal"  required>No
										</div>									
										<br>
										<div class="form-row">
											
											<div class="form-holder form-holder-2">
												<fieldset>
													<legend>Upload Photo</legend>
													<p style="text-align:left">Image size 600px,600px</p>
													<input type="file"  id="photo" name="photo">
												</fieldset>
											</div>
														
											<div id="">
												<br>
												<input  name="sub" type="submit">
											</div>
										</div>
									</div>
								</div>
							</div>
			            </section>
		        	</div>
		        </form>
			</div>
		</div>
	</div>
	<script src="js-nomination/jquery-3.3.1.min.js"></script>
	<script src="js-nomination/jquery.steps.js"></script>
	<script src="js-nomination/main.js"></script>
	
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>