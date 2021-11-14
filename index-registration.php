<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>

    <!-- Favicons -->
  <link href="assets/img/Voting-hero.jpg" rel="icon">
  <link href="assets/img/Voting-hero.jpg" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts-registration/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css-registration/style.css">

    <style>
        h2{
            color: #004b88;
        }

        .register-form{

            padding: 50px 100px 50px 20px;
            paddin-right: 20px;
        }
    </style>
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images-registration/signup-img1.png" alt="">
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" action="user-registration.php" id="register-form">
                        <h2>Voting registration form</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Name :</label>
                                <input type="text" name="name" id="name" required/>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone :</label>
                                <input type="number" name="phone" id="phone" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address :</label>
                            <input type="text" name="address" id="address" required/>
                        </div>
                        <div class="form-radio">
                            <label for="gender" name="gender" class="radio-label">Gender :</label>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="male" value="male">
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female" value="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="other" value="other">
                                <label for="other">Other</label>
                                <span class="check"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="state">State :</label>
                                <div class="form-select">
                                    <select name="state" id="state">
                                        <option value=""></option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Ladakh">Ladakh</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Puducherry">Puducherry</option>
                                        
                                    </select>
                                    <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city">City :</label>
                                <div class="form-select">
                                    <input type="text" name="city" id="city">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="birth_date">DOB :</label>
                            <input type="date" name="birth_date" id="birth_date">
                        </div>
                        <div class="form-group">
                            <label for="pincode">UPRN :</label>
                            <input type="number" name="uprn" id="uprn">
                        </div>
                        <div class="form-group">
                            <label for="course">Program :</label>                            								
								<select class="form-control input-border" id="dept" name="program" placeholder="Department" required>
                                    <option value=""></option>
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
                        <div class="form-group">
                            <label for="year">Year</label>
                                <select class="form-control input-border" name="year" id="">
                                    <option value=""></option>
                                    <option value="first year">First Year</option>
                                    <option value="second year">Second Year</option>
                                    <option value="third year">Third Year</option>
                                </select>

                        </div>
                        <div class="form-group">
                            <label for="email">Email ID :</label>
                            <input type="email" name="email" id="email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label for="Confirm password">Confirm Password</label>
                            <input type="password" name="cpassword" id="cpassword">
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                            <br>
                            <br>
                            <a href="index-login.php">Go back to login page</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>