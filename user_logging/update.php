<?php include('ulogging_server.php'); 


    /* $username1="";
	 $password1="";
	 $username2="";
	 $password2="";*/
	 
if (isset($_POST['change'])){
	
	 $username1=$_POST['username1'];
	 $password1=$_POST['password1'];
	 $username2=$_POST['username2'];
	 $password2=$_POST['password2'];
	 $password3=$_POST['password3'];
	 $id=$_SESSION['id'];
	
    $sql="UPDATE userinfo SET username ='$username2', password='$password2' WHERE Id=$id";

   
	
	if($_SESSION['user']==$username1 and $_SESSION['password']==$password1){

		if($password2 == $password3){
			$query = "SELECT * FROM userinfo WHERE username = '$username2'";
			$run = mysqli_query($con,$query);

			if(mysqli_num_rows($run) == 0){
				$result=mysqli_query($con,$sql);
     
	            echo'<script type="text/javascript">';
	            echo'alert("username and password updated")';
	            echo'</script>';

			}
			else{
				echo '<script type = "text/javascript"> alert("This username is already taken")</script>';
			}
		}
		else{
			echo '<script type = "text/javascript"> alert("New passwords are does not match")</script>';

		}
	}
	
	
	else{echo'<script type="text/javascript">';
	 echo'alert("please enter uername and password which you have logged")';
	 echo'</script>';}
	
}

?>
<html>
<head>
<script type="text/javascript">
       function confirmation(){
           var x = confirm("Are you sure to logout?");
           if(x == true){
               return true;
           }
           else{
               return false;
           }
       }

	   function confirmation_up(){
           var x = confirm("Are you sure to Update admin?");
           if(x == true){
               return true;
           }
           else{
               return false;
           }
       }
    </script>

<link rel="stylesheet"  href="Design1/style.css" type="text/css">
</head>
<body>
<div class="loginbox">
<form action="update.php" method="post">
<p>Current Username   </p>
<input type="text" name="username1"> <br /><br />
<p>Current Password   </p>
<input type="password" name="password1"> <br /><br />
<p>New Username   </p>
<input type="text" name="username2"> <br /><br />
<p>New Password  </p>
<input type="password" name="password2"> <br /><br />
<p> Confirm New Password  </p>
<input type="password" name="password3"> <br /><br />

<input type ="submit" name="change" value="Update" onclick ="return confirmation_up()"> <input type="reset">



<a href="user_logging_form.html" target="_parent"><input type="button" value="Logout" onclick ="return confirmation()"></a>
</form>

</div>
</body>
</html>


	 