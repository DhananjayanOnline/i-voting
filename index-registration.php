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
</head>
<body>

    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images-registration/signup-img.jpg" alt="">
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
                                <input type="radio" name="gender" id="male">
                                <label for="male">Male</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="female">
                                <label for="female">Female</label>
                                <span class="check"></span>
                            </div>
                            <div class="form-radio-item">
                                <input type="radio" name="gender" id="other">
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
                                        <option value="us">Andhra Pradesh</option>
                                        <option value="uk">Arunachal Pradesh</option>
                                        <option value="">Assam</option>
                                        <option value="">Bihar</option>
                                        <option value="">Chhattisgarh</option>
                                        <option value="">Goa</option>
                                        <option value="">Gujarat</option>
                                        <option value="">Haryana</option>
                                        <option value="">Himachal Pradesh</option>
                                        <option value="">Jammu and Kashmir</option>
                                        <option value="">Jharkhand</option>
                                        <option value="">Karnataka</option>
                                        <option value="">Kerala</option>
                                        <option value="">Madhya Pradesh</option>
                                        <option value="">Maharashtra</option>
                                        <option value="">Manipur</option>
                                        <option value="">Meghalaya</option>
                                        <option value="">Mizoram</option>
                                        <option value="">Nagaland</option>
                                        <option value="">Odisha</option>
                                        <option value="">Punjab</option>
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
                            <div class="form-select">
                                <input type="text" name="program" id="program">
                            </div>
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
                            <input type="password" name="Confirm password" id="Confirm password">
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                            <input type="submit" value="Submit Form" class="submit" name="submit" id="submit" />
                            <br>
                            <br>
                            <a href="index-login.html">Go back to login page</a></p>
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