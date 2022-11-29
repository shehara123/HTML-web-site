<?php  
session_start();

$con = mysqli_connect('localhost', 'root', '','csproject');

if(!$con){die("connection failed:".mysqli_connect_error());}

if (isset($_POST['submit'])) {
$user = $_POST['user'];
$password = $_POST['password'];

$query = "SELECT * FROM userinfo WHERE username='$user'and password='$password'";

$results = mysqli_query($con, $query);

$row = mysqli_fetch_array($results);

//checking there is a row
if (mysqli_num_rows($results) == 1){
	
	$_SESSION['user'] = $row['username'];
  	$_SESSION['password'] = $row['password'];
	$_SESSION['id'] = $row['Id'];
	$_SESSION['name'] = $row['firstname'].$row['lastname'];

if ($row['position']=="store"){header ('location:..\store\home.php');}

if($row['position']=="production"){header ('location:..\production\home1.php');}

else{ 
     
     echo'<script type="text/javascript">';
	 echo'alert("Invalid Username or Password");
	 window.location.href="user_logging_form.html"';
	 echo'</script>';
	
	 
	 }
}

}