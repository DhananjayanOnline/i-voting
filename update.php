<html>
    <head>
    <style>
        #but1 {
            background-color: #4fab40;
            border: none;
            color: #fff;
            padding: 15px 30px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
        }

        #but1 {
            color: #fff;
            text-decoration: none;
            padding: 13px 19px;
            }

        #but2 {
            background-color: #dc2028;
            border: none;
            color: #fff;
            padding: 15px 30px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            } 

        #but2 {
            color: #fff;
            text-decoration: none;
            padding: 13px 19px;
            }
    
    </style>
    </head>
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
    <center>
        <form action="" method="post">
            <button type="submit" name="but1" id="but1">ACCEPT</button>
        </form>
        <form action="" method="post">
            <button type="submit" name="but2" id="but2">DECLINE</button>    
        </form>
    </center>
</body>
</html>