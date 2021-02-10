<?php
session_start();
include_once "../../config.php";

$create_table = "create table if not exists blog (id int(10) AUTO_INCREMENT primary key, title varchar(200) not null, category varchar(100) not null, content varchar(10000) not null, keywords varchar(2000) not null, image varchar(200), uploaded_by varchar(50) not null, created_at varchar(25) not null)";
$exe=mysqli_query($con, $create_table);

if(isset($_POST["post"]))
{
    $title=$_POST["title"];
    $category=$_POST["category"];
    $content=$_POST["content"];
    $keywords=$_POST["keywords"];

    $image=$_FILES["image"]["name"];
    $timage=$_FILES["image"]["tmp_name"];
    $nimage=uniqid().".".$image;
$target="../../blog/images/".$nimage;

    move_uploaded_file($timage, $target);


    $uploaded_by=$_POST["uploaded_by"];
    $created_at=date('d-m-Y h:i:s');

    $sl="insert into blog (title, category, content, keywords, image, uploaded_by, created_at) values('$title', '$category', '$content', '$keywords', '$nimage', '$uploaded_by', '$created_at')";
    $run=mysqli_query($con, $sl);
    if($run)
    {
        header("Location:../add blog.php?created");
    }
    else{
        header("Location:../add blog.php?failed");
    }

}
?>