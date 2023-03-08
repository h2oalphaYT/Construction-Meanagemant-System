<?php
include_once "config.php";
?>
<?php

$fname = $_POST["firstName"];
$lname = $_POST["lastName"];
$job = $_POST["occupation"];
$comment = $_POST["comment"];
    

    $sql = "INSERT INTO contactus(First_Name ,Last_Name, occupation ,Comment ) VALUES('$fname','$lname' , '$job', '$comment');";

    //$result = $con -> query($sql);

    if(mysqli_query($con,$sql)){
        echo "Successful";
    }
    else{
        echo "unsuccessful";
    }
?>
 

