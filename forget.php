<?php require ("config.php");

?>

<?php
if(isset ($_POST["sub-btn"])){

    $email = $_POST['email'];
    $newpwd = $_POST['psw'];
    $Conpwd = $_POST['Cpsw'];

    $sql = "UPDATE accounts SET Password = '$newpwd' where Email = '$email'" ;

    if ($con -> query($sql) == TRUE)
    {
        echo "<script>
                alert('logged In succesfully !') ;
                window.location.replace('project.html');
            </script>";

    }
    else {
        echo "Error Updating Record :" . $conn -> error;
    }
}
$con -> close();
?>

