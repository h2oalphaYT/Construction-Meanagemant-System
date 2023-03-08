<?php require ("config.php");

?>

<?php
if(isset ($_POST["sub-btn"])){

    $Name = $_POST['fName'];
    $pwd = $_POST['psw'];
    $Nemail = $_POST['Email'];
    $conEmail = $_POST['NEmail'];
    

    $sql = "UPDATE accounts SET Email = '$newpwd' where Password = '$pwd' AND FirstName = '$Name'" ;

    if ($con -> query($sql) == TRUE)
    {
        echo "<script>
                alert('Changed succesfully !') ;
                window.location.replace('project.html');
            </script>";

    }
    else {
        echo "Error Updating Record :" . $conn -> error;
    }
}
$con -> close();
?>

