<?php
session_start();
include_once "../../config.php";
$create="create table if not exists comments(id int(10) AUTO_INCREMENT primary key, userid int(10), username varchar(25), postid int(10), comment varchar(100))";
$tb=mysqli_query($con, $create);
if(isset($_POST["add_comment"])){
    $comment=$_POST["comment"];
    $postid=$_POST["postid"];
    $username=$_POST["username"];
    $sql="insert into comments(userid, username, postid, comment) values((select id from user where email='".$_SESSION["email"]."'),'$username', '$postid', '$comment')";
    $run=mysqli_query($con, $sql);
    if($run){
        header("Location:../details.php?commentAdded&id=$postid");
    }
    else{
        header("Location:../details.php?commentNotAdded&id=$postid");   
    }
}   

?>