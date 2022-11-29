<?php
   session_start();
   if(isset($_SESSION['user'])){
	echo '<!DOCTYPE html><html lang="en">
	<head>
	
	
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<frameset cols="375,*" border="3">
			<frame name="nav" src="navigation.html" />
			<frame name= "main" src="main.html">
		</frameset>
	
		
	</head>
	<body>
	
	</body>
	</html>';

   }
   else{
	header('location:adminlogin.php');

   }
	
  



?>





