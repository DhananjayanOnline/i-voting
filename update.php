<html>
    <body>
<?php
    session_start();

    
    $con = mysqli_connect('localhost','root','123456');
    
    mysqli_select_db($con, 'ivs_data_base');


    if(isset($_POST["but1"]))
    {
        $s="update candidate_registration set verify='yes' where C_UPRN='{$_SESSION['uprn']}' ";
        if($con->query($s))
        {
            header('location:nom_request.php');
        }
        else{
            echo "failed";
        }
    }
    else if(isset($_POST["but2"]))
    {
        header('location:nom_request.php');
    }

?>

    <form action="" method="post">
        <button type="submit" name="but1">ACCEPT</button>
</form>
<form action="" method="post">
        <button type="submit" name="but2">DECLINE</button>
</form>
</body>
</html>