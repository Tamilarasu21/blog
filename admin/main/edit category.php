<?php
session_start();
include_once "../../config.php";
    if(isset($_POST["change"]))
    {
        $id=$_POST["id"];
        $category=$_POST["category"];

        $sql="update category SET category='".$category."' where id='".$id."'";
        $run=mysqli_query($con, $sql);
        if($run){
            header("Location:../add category.php?edited");
        }
    }

    
?>