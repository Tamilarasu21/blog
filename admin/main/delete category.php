<?php
session_start();
include_once "../../config.php";
if(isset($_GET["id"]))
{
    $id=$_GET["id"];
    $sql="delete from category where id='".$id."'";
    $run=mysqli_query($con, $sql);
    if($run){
        header("Location:add category.php?deleted");
    }
}
?>