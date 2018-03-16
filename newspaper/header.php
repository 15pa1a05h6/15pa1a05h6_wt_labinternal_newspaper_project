<div class="nav">
    <ul>
        <?php  if(!isset($_SESSION['email'])) {    ?>
        <li><a href="signup.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        <?php  } ?>
        <?php if(isset($_SESSION['email'])) {    ?>
        <li><a href="logout.php">Logout</a></li>
        <?php  } ?>
    </ul> 
</div>
