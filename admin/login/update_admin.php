<?php include('adminlogin.php');


	 
if (isset($_POST['change'])){
	
	 $username1=$_POST['username1'];
	 $password1=$_POST['password1'];
	 $username2=$_POST['username2'];
	 $password2=$_POST['password2'];
	 $password3=$_POST['password3'];
	 
	
	if($_SESSION['user']==$username1 and $_SESSION['password']==$password1){

		if($password2 == $password3 ){

			$query = "SELECT * FROM admin_pass WHERE username = '$username2'";
			$run = mysqli_query($con,$query);

			if(mysqli_num_rows($run) == 0){
				$sql="UPDATE admin_pass SET username ='$username2', password='$password2' WHERE username ='$username1'";
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
<link rel="stylesheet"  href="Design2/style.css" type="text/css">

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

</head>
<body>
<div class="loginbox">
<form action="update_admin.php" method="post">
<p>current username   </p>
<input type="text" name="username1"> <br /><br />
<p>current password   </p>
<input type="password" name="password1"> <br /><br />
<p>New username   </p>
<input type="text" name="username2"> <br /><br />
<p>New password  </p>
<input type="password" name="password2"> <br /><br />
<p> Comfirm new password  </p>
<input type="password" name="password3"> <br /><br />

<input type ="submit" name="change" value="update" onClick="return confirmation_up();"> <input type="reset">



<a href="adminlogin.php" target="_parent"><input type="button" value="logout" onClick="return confirmation();"></a>
</form>

</div>
</body>
</html>




	 