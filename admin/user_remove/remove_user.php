<?php


$conn = mysqli_connect('localhost', 'root', '', 'csproject');

if(!$conn){die("connection failed:" .mysqli_connect_error());}

if(isset($_GET['del'])){
	$id = $_GET['del'];
	$sql="DELETE FROM userinfo WHERE Id=$id";
	mysqli_query($conn,$sql);
echo "user removed";}



?>
<html>
<head>
   <link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
<div class="loginbox">

<form method="post" action="remove_user.php">
<p>First Name   </p>
<input type="text" name ="fname"><br/><br/>

<input type="submit" name="find" value="find">
</form>

<?php


if(isset($_POST['find'])){
$firstname ="";	
$firstname =$_POST['fname'];	
	
$sql2="SELECT * FROM userinfo WHERE firstname ='$firstname' ";
$result=mysqli_query($conn,$sql2);
$numrow=mysqli_num_rows($result);
if($numrow >0){
while($row =mysqli_fetch_assoc($result)){
	




?>
<table border="0">
<tr>
<td><?php echo $row['firstname'];?></td>
<td><?php echo $row['lastname'];?></td>
<td>
<a href="remove_user.php?del=<?php echo $row['Id']; ?>" class="del_btn">remove</a>
</td>
</tr>


</table>
<?php }}
else echo"noresult";}?>


 </div>
</body>

</html>


