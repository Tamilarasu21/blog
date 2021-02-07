<?php
session_start();
include_once "../../config.php";
if(isset($_POST["update"]) && isset($_GET["id"]))
{
    $id=$_GET["id"];
    $title=$_POST["title"];
    $category=$_POST["category"];
    $content=$_POST["content"];
    $keywords=$_POST["keywords"];
    $uploaded_by=$_POST["uploaded_by"];
    $created_at=date('d-m-Y h:i:s');
    
    $sqli="update blog set title='".$title."', category='".$category."', content='".$content."', keywords='".$keywords."', uploaded_by='".$uploaded_by."', created_at='".$created_at."' where id='".$id."'";
    $ruin=mysqli_query($con, $sqli);
    if($ruin)
    {
        header("location:../our blogs.php?edited");
    }
}

?>