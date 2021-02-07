<?php
include_once "config.php";
session_start();
if(isset($_POST["signin"]))
{
    $email=stripslashes(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
    $password=md5(stripslashes($_POST["password"]));

    if($query1="select * from user where email='".$email."' and password='".$password."' and role='1'")
    {
        $dev1=mysqli_query($con,$query1);
        if(mysqli_num_rows($dev1)==1)
        {
            $_SESSION["admin"]=$email;
            header("Location:admin/index.php?signin=success");
        }
        else{
            header("Location:index.php?signin=failure");
        }
    }
    if($query2="select * from user where email='".$email."' and password='".$password."' and role='0'")
    {
        $dev2=mysqli_query($con,$query2);
        if(mysqli_num_rows($dev2)==1)
        {
            $_SESSION["email"]=$email;
            header("Location:user/home.php?signin=success");
        }
    }
}
else{
    header("Location:index.php?signin=failure");
}
?>