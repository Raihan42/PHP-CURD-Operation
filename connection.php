<?php
$servername ="localhost";
$username="root";
$password ="";
$dbname = "myDB";

//create connection
$conn = new mysqli($servername,$username,$password,$dbname);
//check connection
if($conn->connect_error)
{
    echo"connection failed".$conn->connect_error;
}


?>