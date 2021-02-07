<?php
include_once "config.php";

$sql="create table if not exists user (id int(5) AUTO_INCREMENT primary key, firstname varchar(25) not null, lastname varchar(25) not null, email varchar(50) not null unique, role int(2) not null DEFAULT 0, password varchar(50) not null, created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP)";
$run=mysqli_query($con,$sql);

if(isset($_POST["signup"]))
{
    $firstname=stripslashes($_POST["firstname"]);
    $lastname=stripslashes($_POST["lastname"]);
    $email=stripslashes(filter_var($_POST["email"], FILTER_SANITIZE_EMAIL));
    $password=md5(stripslashes($_POST["password"]));
    $cpassword=md5(stripslashes($_POST["cpassword"]));
    if($password == $cpassword)
    {
        $st="insert into user (firstname, lastname, email, password) values ('$firstname', '$lastname', '$email', '$password')";
        $te=mysqli_query($con,$st);
        if($te)
        {
            header("Location:index.php?signup=success");
        }
        else
        {
            header("Location:index.php?signup=failure");
        }
    }
}
?>