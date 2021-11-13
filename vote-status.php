<?php

session_start();



$con = new mysqli('localhost','root','123456','ivs_data_base');

if(isset($_POST["vote"])){
    $sql="update votter_registration set VOTE='1' where EMAILID='{$_POST['chk']}'";
    $sql1="update candidate_registration set STATUS=STATUS+1 where C_UPRN='{$_POST['cand']}'";
    $res=$con->query($sql);
    $resq=$con->query($sql1);
    if($res->num_rows>0 and $resq->num_rows>0)
    {
        header('location:index.php');
    }


}

?>