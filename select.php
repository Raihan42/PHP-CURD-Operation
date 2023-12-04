<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,td,th{
            border:1px solid black;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <table>
       <thead>

        <tr>
            <th>Roll</th>
            <th>Name</th>
            <th>Address</th>
        </tr>

       </thead>
   
    
 <?php

include 'connection.php';

    $sql = "SELECT * FROM students";
    $result = $conn->query($sql);


if($result->num_rows > 0)
{

    while($row = $result->fetch_assoc())
    {
        echo"
        <tr>
        
        <td>".$row['roll']."</td>
        <td>".$row['name']."</td>
        <td>".$row['address']."</td>
        
        </tr>
        ";
        

    }
}
else{

    echo"No result Found";
}

 ?>
 </table>

</body>
</html>