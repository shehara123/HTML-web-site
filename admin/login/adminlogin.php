<?php
   $con = mysqli_connect('localhost', 'root', '','csproject');
   session_start();
?>
<html>
<head><title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="Design/style.css">
</head>
<body>
	<div class="loginbox">
		<img src="Design/avatar.png" class="avatar">
			<h1>Login Here</h1>
 <form method="post" action="adminlogin.php">
<p>Username</p>
  		<input type="text" name="user2" required />
		<br><br>
		<label>Password</label>
  		<input type="password" name="pasw2" required />
		<br><br>
		
	<input type="submit"  name="submitlo" />
		<input type="reset" value="Reset" /> 
 </form>
</div>
<?php
    if(isset($_POST['submitlo'])){
        $user = $_POST['user2'];
        $pass = $_POST['pasw2'];
       

        $query = "SELECT * FROM admin_pass WHERE username ='$user' AND password ='$pass'";
        $run = mysqli_query($con,$query);

        if(mysqli_num_rows($run) == 1){
            $_SESSION['user'] = $_POST['user2'];
            $_SESSION['password'] = $_POST['pasw2'];
            header('location:welcome_admin.php');
           
            

        }
        else{
            header('location:adminlogin.php');
            echo '<script type = "text/javascript">alert("check Username or Password")</script>';
        }
        

        
    }


?>


</body>
</html>