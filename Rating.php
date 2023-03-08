<?php
include_once "config.php";
?>
<?php

$fname = $_POST["firstName"];
$Email = $_POST["email"];
$opinion = $_POST["opinion"];
$comment = $_POST["comment"];
    

    $sql = "INSERT INTO ratinng_responces(	Name , Email ,	opinion  , R_Comment 	) VALUES('$fname','$Email' , '$opinion', '$comment');";

    //$result = $con -> query($sql);

    if(mysqli_query($con,$sql)){
        echo "Successful";
    }
    else{
        echo "unsuccessful";
    }
?>
 
