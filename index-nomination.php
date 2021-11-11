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

</head>
<body>
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
											<option value="B.Sc Zoology">B.Sc Zoology</option>
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
													<input type="file"  id="photo" name="photo">
												</fieldset>
											</div>
														
											<div id="">
												<br>
												<input name="sub" type="submit">
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