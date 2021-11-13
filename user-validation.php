<?php

session_start();



$con = new mysqli('localhost','root','123456','ivs_data_base');

//mysqli_select_db($con, 'ivs_data_base');


if(isset($_POST["signin"])){


$email= $_POST['email'];
$password= $_POST['password'];



$s = "select * from votter_registration where EMAILID = '$email' and PASSWORD = '$password'";

$res=$con->query($s);
	if($res->num_rows>0)
	{
		$ro=$res->fetch_assoc();
		$_SESSION["email"]=$ro["EMAILID"];
		$_SESSION["dept"]=$ro["COURSE"];
		$_SESSION["year"]=$ro["YEAR"];
		if($ro["VOTE"]==0)
		{
			echo "<script>window.open('vote.php','_self')</script>";
		}
		else{
			echo "<CENTER><H3> already voted </H3></CENTER>";
		
		}
	}
	else
	{
		echo '<CENTER><H3> INVALID USERNAME or PASSWORD </H3></CENTER>';
	}
}

?>