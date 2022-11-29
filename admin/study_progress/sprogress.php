<?php
  $db = mysqli_connect('localhost','root','','csproject');
 
 if(!$db){die("connection failed:" .mysqli_connect_error());}
 
	 
 
 ?>
   <html>
   <head>
   <link rel="stylesheet" href="style.css" type="text/css">
   </head>
   <body bgcolor = "#ffffff">
   <div class="loginbox">
   
   
   <form action="sprogress.php" method="post">
   
   <p>show progress from </p>
   <input type="text" name="sdate"><p>  to</p>
   <input type="text" name="edate">
   <input type="submit" name="find" value="show">
   <input type="reset" name="clear" value="clr">
   
   </form>
   
	<?php
	
    if(isset($_POST['find'])){
		//$sdate="";
	    //$edate="";
	    $sdate=$_POST['sdate'];
	    $edate=$_POST['edate'];
	    $sql = "SELECT * FROM pcs WHERE date BETWEEN '$sdate' AND '$edate'";
		$result = mysqli_query($db,$sql);
		echo '<table class="table" border ="2">
			 <thead><tr><th>Serial no</th>
			 <th>Batch no</th>
			 <th>status</th>
			 <th>Error</th>
			 <th>Date</th>
			 <th>Time</th>
			 </tr></thead>
			 <tbody>';
		    while($row = mysqli_fetch_assoc($result)){
				echo '<tr>';
				echo '<td>'.$row['serial_no'].'</td><td>'.$row['batch_no'].'</td><td>'.$row['status'].'</td><td>'.$row['error'].'</td><td>'.$row['date'].'</td><td>'.$row['time'].'</td>';
				echo '</tr>';
			}
			
		
		
			echo '</tbody>';
			echo '<tfoot><tr><td style="font-weight:bold;text-align:center" colspan="6">Processing data</td></tr></tfoot>';
		
	 
	}
	
	
	
	 
			
	 
	     

    /*while($row = mysqli_fetch_assoc($result)){?>
   <table border="1">
    
	<thead><th>Serial no</th>
	<th>Batch no</th>
	<th>status</th>
	<th>Error</th>
	<th>Date</th>
	<th>Time</th>
	</thead>
	
	<tr><td><?php echo $row['serial_no'];?></td>
	<td><?php echo $row['batch_no'];?></td>
	<td><?php echo $row['status'];?></td>
	<td><?php echo $row['error'];?></td>
	<td><?php echo $row['date'];?></td>
	<td><?php echo $row['time'];?></td></tr>
	
	
	</table>
 <?php } }*/
	?>
	</div>
</body> 
</html>