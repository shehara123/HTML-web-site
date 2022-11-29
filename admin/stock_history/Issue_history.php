<?php

$conn=mysqli_connect('localhost', 'root', '', 'csproject');

if(!$conn){die("connection failed:".mysqli_connect_error());}

      	 //intilizie varible
	        $code ="";
			$id="";
			
    //filling update table
if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM admin_code WHERE id=$id");

		if (mysqli_num_rows($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$code = $n['code'];
			
		}
	}

?>
     
<html>	 
<head>
     <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="loginbox">

	<form action="Issue_history.php" method="post">
	<p>Show  </p> <input type="text" name="code" value="<?php echo $code?>" readonly> <p> History  From </p>
	<input type="text" name="fdate"><p> To</p>
	<input type="text" name="edate">
	<input type="submit" name="show" value="SHOW">
	<form>
	<br /><br /><hr /><hr />
	

<form action="Issue_history.php" method="post">
<p>Find To  </p><input type="text" name="search">
<input type="submit" name="find" value="FIND">
</form>
<?php
if(isset($_POST['find'])){
$search ="";	
$search =$_POST['search'];	
	
$sql2="SELECT * FROM admin_code WHERE code LIKE '$search%' ";
$result=mysqli_query($conn,$sql2);
$numrow=mysqli_num_rows($result);
if($numrow >0){
	echo'<table border="1">
	<thead><th>Code</th>
	<th>Action</th></thead>';
while($row =mysqli_fetch_assoc($result)){
	echo'
	<tr>
<td>'.$row['code'].'</td>
<td>
<a href="Issue_history.php?edit='.$row['id'].'" class="del_btn">SHOW</a>
</td>
</tr>


</table>
	';
}}}
	?>
<?php include	('Issue_history_server.php');?>
	
</div>
</body>
</html>