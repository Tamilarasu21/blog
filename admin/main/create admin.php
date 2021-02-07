<?php
session_start();
include_once "../../config.php";

if(isset($_POST["add"]))
{
    $firstname=stripslashes($_POST["firstname"]);
    $lastname=stripslashes($_POST["lastname"]);
    $email=stripslashes($_POST["email"]);
    $password=stripslashes(md5($_POST["password"]));
    $cpassword=stripslashes(md5($_POST["cpassword"]));

    if($password==$cpassword)
    {
        $sql="insert into user (firstname, lastname, email, role, password) values ('$firstname', '$lastname', '$email', '1','$password')";
        $run=mysqli_query($con, $sql);
        if($run)
        {
            header("Location:../add admin.php?created");
        }
    }
}
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $stm="delete from user where role='1' and id='".$id."'";
    $exe=mysqli_query($con, $stm);
    if($exe)
    {
        header("Location:add admin.php?deleted");
    }
}
?>