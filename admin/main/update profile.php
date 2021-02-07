<?php
    session_start();
    include_once "../../config.php";
    if(isset($_POST["update"]))
    {
        $firstname=$_POST["firstname"];
        $lastname=$_POST["lastname"];
        $email=$_POST["email"];
        $query="update user SET firstname='".$firstname."', lastname='".$lastname."', email='".$email."'  where email='".$_SESSION['email']."'";
        $rock=mysqli_query($con, $query);
        if($rock){
            $_SESSION["email"]=$email;
            header("Location:../profile.php?update=success");
        }
        else{
            header("Location:../profile.php?update=failed");
        }
    }
    else{
        header("Location:../profile.php?update=failed");
    }
?>