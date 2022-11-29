<?php  include('itemserver.php'); ?><html>



<head>
	<link rel="stylesheet" href="style.css" type="text/css">
	<script type="text/javascript">
       function confirmation(){
           var x = confirm("Are you sure to romove this item?");
           if(x == true){
               return true;
           }
           else{
               return false;
           }
       }

	   function confirmation_add(){
           var x = confirm("Are you sure to add this item?");
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


	<form name="item" method="post" action="itemserver.php" >
	
	<input type="hidden" name="id" value="<?php echo $id; ?>">
	
	
	
		<div class="input-group">
			<p>Serial code</p>
			<input type="text" name="sc" value="<?php echo $ser; ?>" required >
		</div>
		
		<div class="input-group">
		

	<button  type="submit" name="save" onclick ="return confirmation_add();"  >Add</button>


		</div>
	</form>
<br /><br />


<form action="item.php" method="post">
<p>Find to  </p><input type="text" name="search">
<input  type="submit" name="find" value="FIND">
</form>
<?php $results = mysqli_query($db, "SELECT * FROM pri"); ?>


<?php
if(isset($_POST['find'])){
$search ="";	
$search =$_POST['search'];	
	
$sql2="SELECT * FROM pri WHERE ser_cod LIKE '$search%' ";
$result=mysqli_query($db,$sql2);
$numrow=mysqli_num_rows($result);
if($numrow >0){
	echo'<table border="1">
	<thead><th>Serial Code</th>
	<th>Action</th></thead>';
while($row =mysqli_fetch_assoc($result)){
?>
<tr>
<td><?php echo $row['ser_cod'];?></td>

<td>
<a href="item.php?del=<?php echo $row['id']; ?>" onclick ="return confirmation();" class="del_btn">REMOVE</a>
</td>
</tr>



<?php }echo'</table>';}}?>
	
	
	


	</div>
</body>
</html>