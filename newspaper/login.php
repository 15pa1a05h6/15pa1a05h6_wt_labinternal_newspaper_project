<html>
	<?php 
	include "connection.php";
    session_start();
	if(isset($_POST['sub'])){
		$email=$_POST['email'];      
		$password=$_POST['password'];
        $qry= "select * from `details` where `email`='$email' and `password`='$password'; ";
		$res=mysqli_query($conn,$qry);
        if(mysqli_num_rows($res)>0)  {
            $m = "Success";
             header("Location: index.php"); 
        } else {
            $warning= "username name and password incorrect";
            echo "<script type='text/javascript'>alert('$warning');</script>";
             header("Location:index.php"); 
        }
	}
?>
    <head >
            <title>Login</title>
            <link rel="stylesheet" type="text/css" href="project.css">  

    </head>
    <body>
        <main>
                <h2 align="center"> <a href='signup.php'>Signup</a> / <a href='login.php'>login</a>   </h2>
                <form action="" method="post">
                    <div class="container">
                    <b>Email</b><br>
                    <input type="text" name="email">
                    <br><br>
                    <b>Password</b>
                    <br>
                    <input type="password" name="password">
                    <br><br>
                 <input type="submit"  class="button" name="sub" value="Login" class="bold">
                </form>
        </main>
    </body>
</html>  
  
