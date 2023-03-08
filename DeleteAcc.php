<?php  require ("config.php");

?>


<?php
if(isset ($_POST["sub-btn"])){

    $email = $_POST['email'];
    $pwd = $_POST['psw'];
    

$sql = "DELETE FROM accounts WHERE Email ='$email' AND Password = '$pwd'" ;


if ($con->query($sql) === TRUE)
 {
    echo "<script>
    alert('Deleted in succesfully !') ;
    window.location.replace('project.html');
</script>";
} else {
    echo "Error deleting record: " . $conn->error;
}
}
$con->close();

?>