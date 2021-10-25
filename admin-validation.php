<?php

session_start();



$con = new mysqli('localhost','root','123456','ivs_data_base');

if(isset($_POST["signin"])){

$email= $_POST['email'];
$password= $_POST['password'];



$s = "select * from admin_registration where EMAILID = '$email' and PASSWORD = '$password'";

$res=$con->query($s);
	if($res->num_rows>0)
	{
		$ro=$res->fetch_assoc();
		$_SESSION["email"]=$ro["EMAILID"];
		
		echo "<script>window.open('index-admin.php','_self')</script>";
	}
	else
	{
		echo "INVALID USERNAME or PASSWORD";
	}
}

?>