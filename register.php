 <?php
include_once "config.php";
?>
<?php

    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $phone = $_POST['phoneNo'];
    $email = $_POST['email'];
    $pwd = $_POST['psw'];

    $sql = "INSERT INTO accounts(FirstName, LastName, Phone, Email,	Password) VALUES('$fname','$lname',$phone,'$email','$pwd');" 

    //$result = $con -> query($sql);

    if(mysqli_query($con,$sql)){
        echo "Successful";
    }
    else{
        echo "unsuccessful";
    }
    
?>