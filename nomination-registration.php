<?php

session_start();



$con = mysqli_connect('localhost','root','123456');

mysqli_select_db($con, 'ivs_data_base');

if(isset($_POST['sub']))
{

    $uprn= $_POST['uprn'];
    $name= $_POST['name'];
    $phone= $_POST['phone'];
    $dept= $_POST['dept'];
    $year= $_POST['year'];
    $admission= $_POST['admission'];
    $attendence= $_POST['attendence'];
    $dob= $_POST['dob'];
    $intermediate= $_POST['intermediate'];
    $failed= $_POST['failed'];
    $supply= $_POST['supply'];
    $disciplinary= $_POST['disciplinary'];
    $criminal= $_POST['criminal'];
    //$photo= $_POST['photo'];

    $s = "select * from candidate_registration where C_UPRN = '$uprn'";

    $result = mysqli_query($con, $s);

    $num= mysqli_num_rows($result);

    if($num == 1){
        echo "UPRN already taken";
    }else{
        $reg= "insert into candidate_registration (`C_UPRN`,`NAME`,`PHONENUMBER`,`DOB`,`DEPARTMENT`,`CURRENT_YEAR`,`PERCENTAGEOFATTENDENCE`,`YEAROFADMISSION`,`YEAROFPASSINGINTERMEDIATE`,`FAILEDEXAM`,`SUPPLEMENTARYEXAM`,`DISCIPLINARYACTION`,`CRIMINALCASE` ) 
        values ('$uprn','$name','$phone','$dob','$dept','$year','$attendence','$admission','$intermediate','$failed','$supply','$disciplinary','$criminal')" ;

        //mysqli_query($con, $reg);
        if($con->query($reg))
        {
            header('location:index.php');

        }
        else{
            echo "Failed";
        }

    }

}

?>