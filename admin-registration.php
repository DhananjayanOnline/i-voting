<?php

session_start();

header('location:index-admin.php');

$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'ivs_data_base');


$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$department= $_POST['department'];
$designation= $_POST['designation'];
$password= $_POST['password'];


$s = "select * from admin_registration where EMAILID = '$email'";

$result = mysqli_query($con, $s);

$num= mysqli_num_rows($result);

if($num == 1){
    echo "Email already taken";
}else{
    $reg= "insert into admin_registration (`EMAILID`, `NAME`, `PHONE`, `DEPARTMENT`, `DESIGNATION`, `PASSWORD`) values ('$email','$name','$phone','$department','$designation','$password')" ;

    mysqli_query($con, $reg);
    echo"Registration Successful";

}


?>