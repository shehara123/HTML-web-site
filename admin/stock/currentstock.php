<?php  include('currentstock_server.php'); ?><html>



<head>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<div class="loginbox">

<font size="12" color="#ffffff">Current Stock</font>
<hr/><br />




<?php $results = mysqli_query($db, "SELECT * FROM admin_code "); ?>

<table border="2"width="400" style="color:#eef0e9">
	<thead>
		<tr>
			<th>Name</th>
			<th>Quntity</th>
			
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['code']; 
			?></td>
			<td><?php echo $row['qty']; ?></td>
			
			
		</tr>
	<?php } ?>
	
	
</table>
	</div>
	</body>
	</html>



 