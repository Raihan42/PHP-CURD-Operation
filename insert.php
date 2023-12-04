<?php

include 'connection.php';

    $roll=$_REQUEST['roll'];
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];

    //insert operation
    $sql ="INSERT INTO students VALUES('$roll','$name','$address')";
    
    //check insert

    if($conn->query($sql)===TRUE)
    {
        echo"New Data insert Successfully";
        header("Location:http://127.0.0.1/PHP/select.php");
    }
    else{
        echo"Error".$conn->error;
    }

?>