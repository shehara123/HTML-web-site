<?php 

 $conn=mysqli_connect('localhost', 'root', '', 'csproject');

if(!$conn){die("connection failed:".mysqli_connect_error());}

     $sercod="";
	 $bat="";
	 $bat="";
	 $ls="";
	 $id="";
	 
	 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM pri WHERE id=$id");

		if (mysqli_num_rows($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$sercod = $n['ser_cod'];
			
		}
	}
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="loginbox">
<br/><br />
 <form method="post" action="progress.php" >
        
<table border="1" width="400">
	
		
		<tr>
			<td><font color="#ffffff">Serial Code</font></td>
			<td><input type="text" name="code" value="<?php echo $sercod; ?>" readonly ></td>
		</tr>	 
		
		
		  <tr>
		  <td><font color="#ffffff">Batch no</font></td>
		  <td><input type="number"  name="bat" required>
		   <input type="hidden" name="id" value="<?php echo $id; ?>"></td>
		   </tr>
		   
	       <tr><td><font color="#ffffff">status</font></td>
            <td><font color="#ffffff"><input type="radio" name="mt" value="started" required />start
            <input type="radio" name="mt" value="on going" required />On Going
            <input type="radio" name="mt" value="pause" required />Pause
            <input type="radio" name="mt" value="resume" required />Resume
            <input type="radio" name="mt" value="abandon" required />Abondon
            </font></td>
		   </tr>

        
           <tr><td> <font color="#ffffff">Error</font></td>
            <td><input type ="text" name = "err"></td>
		   </tr>
		   
		   <tr><td colspan="2" align="center">
               <input type="submit" name="update" value="Record">
               <input type="reset" value="Cancel">
			</td></tr>
		   
	</table>	
	</form>
	
	<form action="progress.php" method="post">
<p>search for</p>
<table border="0"><tr>
<td><input type="text" name="search"></td>
<td><input type="submit" name="find" value="find"></td>
</table>
</form><br /><br />

<?php


if(isset($_POST['find'])){
$search ="";	
$search =$_POST['search'];	
	
$sql2="SELECT * FROM pri WHERE ser_cod LIKE '$search%' ";
$result=mysqli_query($conn,$sql2);
$numrow=mysqli_num_rows($result);
if($numrow >0){
	echo'<div class="loginbox"><table border="1">
	<thead><th><font color="#ffffff">SerialCode</font></th>
	<th><font color="#ffffff">Action</font></th></thead>';
while($row =mysqli_fetch_assoc($result)){
	




?>

<tr>
<td><font color="#ffffff"><?php echo $row['ser_cod'];?></font></td>
<td>
<a href="progress.php?edit=<?php echo $row['id']; ?>" class="del_btn">PROGRESS</a>
</td>
</tr>

</div>
</table>
<?php }}
else {echo'<script type="text/javascript">';
	 echo'alert("No result found")';
	 echo'</script>';}
}?>

<?php 



if (isset($_POST['update'])) {
		$sercod = $_POST['code'];
		$bat = $_POST['bat'];
		$sta = $_POST['mt'];
		$error = $_POST['err'];
		$date = date("m/d/y");
		$time = date("h:i:sa");

		mysqli_query($conn, "INSERT INTO pcs 
		(serial_no,batch_no,statu,error,pdate,ptime) VALUES 
('$sercod', '$bat','$sta','$error','$date','$time')");}
?>
</div>
</body>
</html>