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
$email= $_POST['email'];
$password= $_POST['password'];


$s = "select * from votter_registration where EMAILID = '$email'";

$result = mysqli_query($con, $s);

$num= mysqli_num_rows($result);

if($num == 1){
    echo "Email already taken";
}else{
    $reg= "insert into votter_registration (`VT_UPRN`, `NAME`, `PHONE`, `ADDRESS`,	`GENDER`, `STATE`, `CITY`, `DOB`, `COURSE`, `EMAILID`, `PASSWORD`) values ('$uprn','$name','$phone','$address','$gender','$state','$city','$dob','$program','$email','$password')" ;

    mysqli_query($con, $reg);
    echo"Registration Successful";

}


?>