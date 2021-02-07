<?php
    if(isset($_POST["connect"]))
    {
        $server=$_POST["server"];
        $username=$_POST["username"];
        $password=$_POST["password"];
        $dbname=$_POST["dbname"];
        
        $conn=mysqli_connect($server,$username,$password);

        if($conn)
        {
            $copy="
<?php
    define('SERVER','".$_POST['server']."');
    define('USERNAME','".$_POST['username']."');
    define('PASSWORD','".$_POST['password']."');
    define('DBNAME','".$_POST['dbname']."');
?>";
            $fp = fopen('database.php', 'wb');
            fwrite($fp,$copy);
            fclose($fp);
            if(file_exists("database.php"))
            {
                unlink("install/index.html");
                rmdir("install");
                header("Location:index.php");
            }
        }
        else
        {
            echo mysqli_connect_error();
        }
    }
?>