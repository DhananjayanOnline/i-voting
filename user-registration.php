<?php

session_start();

header('location:index-login.php');

$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'ivs_data_base');


$name= $_POST['name'];
$phone= $_POST['phone'];
$address= $_POST['address'];
$gender= $_POST['gender'];
$state= $_POST['state'];
$city= $_POST['city'];
$dob= $_POST['birth_date'];
$uprn= $_POST['uprn'];
$program= $_POST['program'];
$year= $_POST['year'];
$email= $_POST['email'];
$password= $_POST['password'];
$cpassword= $_POST['cpassword'];


$s = "select * from votter_registration where EMAILID = '$email'";

$result = mysqli_query($con, $s);

$num= mysqli_num_rows($result);

if($num == 1){
    echo "Email already taken";
}else{
    $reg= "insert into votter_registration (`VT_UPRN`, `NAME`, `PHONE`, `ADDRESS`,	`GENDER`, `STATE`, `CITY`, `DOB`, `COURSE`,`YEAR`, `EMAILID`, `PASSWORD`, `CONFIRM_PASSWORD`) values ('$uprn','$name','$phone','$address','$gender','$state','$city','$dob','$program','$year','$email','$password','$cpassword')" ;

    mysqli_query($con, $reg);
    echo"Registration Successful";

}


?>