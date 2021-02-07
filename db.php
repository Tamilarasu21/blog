<?php
include "database.php";
class db
{
    public $servername;
    public $username;
    public $password;
    public $dbname;
    public $con;

    public function __construct($dbname="",$servername=SERVER,$username=USERNAME,$password=PASSWORD)
    {
        $this->dbname=$dbname;
        $this->servername=$servername;
        $this->servername=$servername;
        $this->password=$password;

        #connection
        $this->con=mysqli_connect($servername,$username,$password);
        if(!$this->con)
        {
            die("error".mysqli_connect_error());
        }

        #query to create a database
        $sql="create database if not exists $dbname";

        #execute query
        if(mysqli_query($this->con, $sql))
        {
            $this->con=mysqli_connect($servername,$username,$password,$dbname);
        }
    }
}
?>
