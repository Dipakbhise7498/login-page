<?php

error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crudphp";


$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
  
}
else
{
    echo "connection faild".mysqli_connect_error();
}

?>
