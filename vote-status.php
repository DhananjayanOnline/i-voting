<?php

session_start();



$con = new mysqli('localhost','root','123456','ivs_data_base');

if(isset($_POST["vote"])){
    
    $sql="update votter_registration set VOTE=1 where EMAILID='{$_POST['chk']}'";
    error_reporting(0);
    $res=$con->query($sql);
    header('location:submit.php');
    if($res->num_rows>0 )
    {
        
        $sql1="update candidate_registration set STATUS=STATUS+1 where C_UPRN='{$_POST['cand']}'";
        $resq=$con->query($sql1);
        if($resq->num_rows>0)
        {
        header('location:index.php');
        }
    }


}

?>