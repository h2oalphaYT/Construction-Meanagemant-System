<?php 

$SERVER = "localhost";
$username = "root";
$password="" ;
$database ="construction1";

$con=new mysqli($SERVER,$username,$password,$database);

if ($con ->connect_error)
{
    die("connection failed :" . $con ->connect_error);

}else{
     echo "<script>alert('connected')</script>" ;

}

?>