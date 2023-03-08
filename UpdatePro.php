<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction System</title>
    <link rel="stylesheet" href="css/project.css">
    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="css/UpdatePro.css">

    
     
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
<?php
  include 'config.php';
  SESSION_START();
$id=$_SESSION['id'];
$query=mysqli_query($con,"SELECT * FROM accounts where accID='$id'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>


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
            <li><a  href=""> <font class="text" >Services</font></a></li>
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


<h1 style="text-align:center">User Profile </h1>

<div class="card">
  <img src="images/blogs-1.png" alt="John" style="width:100%">
  <!-- <h3>Name :  </h3> -->
  <input type="text" class="form-control" name="fname"  placeholder="Enter your Fullname" value="<?php echo $row['FirstName']; ?>" required >
  <!-- <p>Email : </p> -->
  <input type="text" class="form-control" name="email"  placeholder="Enter your Email" value="<?php echo $row['Email']; ?>" required >
  <div style="margin: 24px 0;">
        <a href="#facebook" target="_blank"><img src="images/facebook (1).png" width="30px">    </a>
        <a href="#instergram" target="_blank"><img src="images/insta.png" width="30px">    </a>
        <a href="mailto:" target="_blank"><img src="images/mail.png" width="30px">    </a>
        <a href="#twiter" target="_blank"><img src="images/twiter.png" width="30px">    </a>
        <a href="#youtube" target="_blank"><img src="images/youtube.png" width="30px">    </a>
 
  
  </div>
            <p><a href="DeleteAcc.html" ><button>Delete Account</button></p></a>
              <p><a href="changeEmail.html" ><button>Change Email</button></p></a>

</div>




<footer>
        <center>
            <h3 class="text">Follow Us</h3>
            <!--add social media links-->

            <div id="icons">
                <a href="#facebook" target="_blank"><img src="images/facebook (1).png" width="30px">    </a>
                <a href="#instergram" target="_blank"><img src="images/insta.png" width="30px">    </a>
                <a href="mailto:" target="_blank"><img src="images/mail.png" width="30px">    </a>
                <a href="#twiter" target="_blank"><img src="images/twiter.png" width="30px">    </a>
                <a href="#youtube" target="_blank"><img src="images/youtube.png" width="30px">    </a>

                <p >contact us : 0719352275 / 0719352275</p>

                <div class="links">
                <a href="https://www.facebook.com/profile.php?id=100087330281576" target="_blank"><img src="images/facebook (1).png" width="40px">    </a>
                <a href="" target="_blank"><img src="images/insta.png" width="40px">    </a>
                <a href="mailto:mail-c.s.k.construction2022@gmail.com" target="_blank"><img src="images/mail.png" width="40px">    </a>
                <a href="" target="_blank"><img src="images/twiter.png" width="40px">    </a>
                <a href="https://www.youtube.com/channel/UCKyPMzZHZpNzdTbay7RlZZg" target="_blank"><img src="images/youtube.png" width="40px">    </a>
                </div>

            </div>

           
            <div class="text" >@Created BY <span class="logo2">CSK Team</span> | All right reserved!</div>


        </center>
    </footer>
