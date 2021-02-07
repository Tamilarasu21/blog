<?php
    session_start();
    include_once "../../config.php";

    $sql="create table if not exists category (id int(3) AUTO_INCREMENT primary key, category varchar(100) not null)";
    $pop=mysqli_query($con, $sql);

    if(isset($_POST["add"])){
        $category=$_POST["category"];

        $query="insert into category (category) values ('$category')";
        $exe=mysqli_query($con, $query);
        if($exe){
            header("Location:../add category.php?created");
        }
        else{
            header("Location:../add category.php?failed");
        }
    }
?>