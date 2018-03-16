<?php 
include "connection.php";
session_start();

if(isset($_POST['sub'])) {
        $user=$_POST['user'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $repass=$_POST['Retype Password'];
         $qry="select `email` from `details` where `email`='$email';";
        $res=mysqli_query($conn,$qry);
        if($result=mysqli_fetch_array($res))  {
            $m = "Success";
            $warning= "you have already registered!";
        }
       else{
        $qry = "INSERT INTO `details` (`user`,`email`, `password`) VALUES ('$user','$email', '$password');";
         mysqli_query($conn,$qry) or die(header('location:index.php' ));
         header('location:index.php');
       }
    }
    function is_valid_passwords($password,$Repass) 
    {
        console.log("pass");//+$pass+"repass"+$repass;
     // Your validation code.
     if (empty($pass)) {
         echo "Password is required.";
         return false;
     } 
     else if ($password != $repass) {
         // error matching passwords
         echo 'Your passwords do not match. Please type carefully.';
         return false;
     }
     // passwords match
     return true;
}
?>
<!DOCTYPE html>
<html>
    <head>
         <title>Signup</title>
       <link rel="stylesheet" type="text/css" href="project.css">  
       <!---<script src="project.js"></script>-->
    </head>

    <body>
    
           <div class="header">
            <?php include "includes/header.php"?>   
           </div>
    
                     
                <div class="hello">
                <h2 align="center"> <a href='signup.php'>Signup</a> / <a href='login.php'>login</a></h2> </div>
                <h2><?php if(isset($warning)) echo $warning;?></h2>
                <form class="form" method="post" action="">
                <b>user</b><br>
                <input type="text" name="user"><br>
                <b>Email</b><br>
                <input type="text" name="email" required><br>
                <b>Password</b></br>
                <input type="password" name="password" required><br>
                <b>Retype Password</b><br>
                 <input type="password" name="Repass"><br><br>
                   <input class="button"  type="submit"  name="sub" value="Signup">
            </form>
    </body>  
</html>
