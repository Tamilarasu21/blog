<?php
    include "db.php";
    date_default_timezone_set('Asia/Kolkata');
    $database=new db(DBNAME);
    // $con=mysqli_connect("remotemysql.com", "o6N0rgilId", "uQF1gSgecL", "o6N0rgilId");
    $con=mysqli_connect(SERVER, USERNAME, PASSWORD, DBNAME);
    if(!$con)
    {
        die("Error Occured");
    }
?>