<?php
include_once "config.php";
?>

<?php

session_start();

$email = $_POST['email'];
$psw = $_POST['psw'];



$sql = "SELECT * FROM accounts where Email = '$email' AND password ='$psw' ";

$result = $con -> query($sql);
$row = $result ->fetch_assoc();

if($result ->num_rows>0){
    
    $_SESSION['email'] = $row ['Email'];
    $_SESSION['name'] = $row['FirstName'];
    $_SESSION['id'] = $row['accID'];
    $_SESSION['loginstat'] = True;  
    echo "<script>alert('logged In succesfully !') ;
                    window.location.replace('LoginHome2.html');
        </script>";

}
else{
    echo "<script>alert('logged In unsuccesfull !')
    window.location.replace('project.html');
    </script>" ;
}

sql_close($con);
?>















