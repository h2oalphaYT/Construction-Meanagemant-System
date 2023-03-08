
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction System</title>
    <link rel="stylesheet" href="css/project.css">
    <link rel="stylesheet" href="css/review.css">
    
      <!--project css-->
    <script src="js/login.js.js"></script>
    
    <style>
table, th, td {
     border: 1px solid black;
}
table {
    width: 100%;
    
}

</style>
</head>
<body>
    
    <nav >
        
         <!--logo adding-->
         <div class="logo">
         <a href="home.html" >CSK <span class="logo2">construction</span></a>
        </div>
        <div class="navA"> 
        <!--navigation baR-->
        <ul>
                
            <li><a  href="home.html" ><font class="text" >Home</font></a></li>
            <li><a  href="CONTACT.HTML" ><font class="text" >Contact</font></a></li>
            <li><a  href="Servises.html"> <font class="text" >Services</font></a></li>
            <li><a  href=""> <font class="text" >Our Product</font></a></li>
            <li><a  href=""><font class="text" >Blogs</font></a></li>
            <li><a  href="blogs.html"><font class="text" >About Us</font></a></li>
      
            <!--search bar-->
            
           

      

            <!--logoin icon /infomation & /serch-->.

    <div style="width:50px">

        <div class="rating" >
            <a href="res-rating.html"><img class="contact" src="images/rating.png" alt="Rating" width="48px"></a>
        </div>

        <div class="login" >
            <a href="project.html"><img class="contact " src="images/login.jpg" alt="login" width="33px"></a>
        </div>

        <div class="signup" >
            <a href="registation.html"><img class="contact" src="images/signup.jpeg" alt="signup" width="48px"></a>
        </div>

    </div>
</nav>
   
        </ul>

        </div>
  
        <h2>Responsive Testimonials</h2>
        <p>Add your response ass well.</p> 

        
        <div class="container1">
          <img src="images/person10.jpg" alt="Avatar" style="width:90px">
<?php

$SERVER = "localhost";
$username = "root";
$password="" ;
$database ="construction1";
//create connection
$con=new mysqli($SERVER,$username,$password,$database);

if ($con ->connect_error)
{
    die("connection failed :" . $con ->connect_error);

}else{
     echo "<script>alert('connected')</script>" ;

}

$sql = "SELECT RID, Name , Email , opinion , R_Comment FROM ratinng_responces";

$result = ($con -> query($sql));

if ($result -> num_rows > 0){

    echo "<table ><tr>
    <th>Rating ID</th>
    <th>Name</th>
    <th>Opinion</th>
    <th>Rating comment</th>
    </tr>";

    while ($row = $result -> fetch_assoc()) {

         

        echo " <tr><td> " . $row["RID"] . "</td><td> " . $row["Name"] . "</td><td> " . $row["opinion"] . "</td><td>" . $row["R_Comment"] ."</td>" ; 

    }  
    echo "</table>";
}
else {
    echo "0 results";
}


?> 
        
    </div>

    
        
    
</body>
</html>

