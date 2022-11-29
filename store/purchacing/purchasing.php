<?php   


$conn=mysqli_connect('localhost', 'root', '', 'csproject');

if(!$conn){die("connection failed:".mysqli_connect_error());}
     
	 //intilizie varible
	        $code ="";
	        $qty ="";
			$id="";
    //filling update table
if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM admin_code WHERE id=$id");

		if (mysqli_num_rows($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$code = $n['code'];
			$qty = $n['qty'];
		}
	}
?>
<html>
<head><link rel="stylesheet" type="text/css" href="style.css" >
</head>
<body>
<div class="loginbox">
<form action="purchasing.php" method="post">
<table border="1" width="400" color="#ffffff">
<tr>
<td><font color="#ffffff">Code</font></td>
<td><input type="text" name="code" value="<?php echo $code; ?>" readonly required>
<input type="hidden" name="id2" value="<?php echo $id; ?>" ></td>
</tr>
<tr>
<td><font color="#ffffff">Quantity</font></td>
<td><input type="number" name="qty2" required >
<input type="hidden" name="qty1" value="<?php echo $qty; ?>"></td>
</tr>
<tr>
<td><font color="#ffffff">Supplier</font></td>
<td><input type="text" name="des"></td>
</tr>
<tr><td colspan="2" align="center">
<input type="submit" name="update" value="Purchasing">
<input type="reset" value="Cancel">
</td></tr>
</table>
</form>
<br/><br />


<form action="purchasing.php" method="post">
<p>search for</p>
<table border="0"  width="400"><tr>
<td><input type="text" name="search"></td>
<td><input type="submit" name="find" value="find"></td>
</table>
</form><br /><br />

<?php


if(isset($_POST['find'])){
$search ="";	
$search =$_POST['search'];	
	
$sql2="SELECT * FROM admin_code WHERE code LIKE '$search%' ";
$result=mysqli_query($conn,$sql2);
$numrow=mysqli_num_rows($result);
if($numrow >0){
	echo'<table border="3" color="#ffff">
	<thead><th><font color="#ffffff">Code</font></th>
	<th><font color="#ffffff">Quantity</font></th>
	<th><font color="#ffffff">Action</font></th></thead>';
while($row =mysqli_fetch_assoc($result)){
	




?>

<tr>
<td><font color="#ffffff"><?php echo $row['code'];?></font></td>
<td><font color="#ffffff"><?php echo $row['qty'];?></font></td>
<td><font color="#ffffff">
<a href="purchasing.php?edit=<?php echo $row['id']; ?>" class="del_btn">PURCHASE</a>
</font></td>
</tr>



<?php }echo'</table>';}
else {echo'<script type="text/javascript">';
	 echo'alert("No result found")';
	 echo'</script>';}
}?>



<?php 

if (isset($_POST['update'])) {
	$id = $_POST['id2'];
	$qty1 = $_POST['qty1'];
	$qty2 = $_POST['qty2'];
	$code2=$_POST['code'];
	$supp=$_POST['des'];
	$date = date("m/d/y");
	$qty3 = $qty1 + $qty2;

	mysqli_query($conn, "UPDATE admin_code SET qty='$qty3' WHERE id=$id");
	
	mysqli_query($conn, "INSERT INTO purchasing (Pcode,Pqty,supp_cod,Pdate) VALUES ('$code2', '$qty2','$supp','$date')");

}
?>
</div>
</body>
</html>