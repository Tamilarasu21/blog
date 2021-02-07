<?php
    session_start();
    include_once "../../config.php";
    $sql="select * from user where email='".$_SESSION['email']."'";
    $run=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($run))
    {
        $pass=$row["password"];
    }

    if(isset($_POST["change"])){
        $opass=md5(stripslashes($_POST["opassword"]));
        $npass=md5(stripslashes($_POST["npassword"]));
        $cnpass=md5(stripslashes($_POST["cnpassword"]));

        // checking for old password match
        if($pass==$opass){
            // checking for new password match
            if($npass==$cnpass){
                $query="update user set password='".$cnpass."' where email='".$_SESSION["email"]."'";
                $rep=mysqli_query($con, $query);
                if($rep==TRUE){
                    header("Location:password.php?password=true");
                }
            }
        }
        else{
            header("Location:password.php?oldpass=false");
        }
    }
?>