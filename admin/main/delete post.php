<?php
session_start();
include_once "../../config.php";
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $sql="delete from blog where id='".$id."'";
    $run=mysqli_query($con, $sql);
    if($run){
        header("Location:our blogs.php?deleted");
    }
}
?>