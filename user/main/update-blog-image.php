<?php
session_start();
include_once "../../config.php";

if(isset($_POST["update"]) && isset($_GET["id"]))
{
    $id=$_GET["id"];
    $oldimage=$_POST["oldimage"];
    $image= $_FILES["newimage"]["name"];
    $timage=$_FILES["newimage"]["tmp_name"];
    $nimage=uniqid().".".$image;
    $target="../../blog/images/".$nimage;
    move_uploaded_file($timage, $target);
  if($timage!="")
  {
    unlink("../../blog/images/$oldimage");
    $stmt="update blog SET image='$nimage' where id='$id'";
    $exe=mysqli_query($con,$stmt);
   if($exe)
   {
        header("Location:../my blogs.php?success");
   }
   else
   {
        header("Location:../my blogs.php?failed");
   }
  }
}
?>