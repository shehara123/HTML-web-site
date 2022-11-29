<?php
 $db = mysqli_connect('localhost', 'root', '', 'csproject');
 
 if(!$db){die("connection failed:" .mysqli_connect_error());}
 
   $sql="SELECT * FROM pcs ORDER BY id DESC LIMIT 1 ";
   
   $result = mysqli_query($db,$sql);
   
   $row = mysqli_fetch_assoc($result);
   
   
   ?>
   <html>
   <head>
   <link rel="stylesheet" href="style.css" type="text/css">
   </head>
   <body>
   <div class="loginbox">
   <table border="1" style="color:#eef0e9">
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
    </div>
    </body> 
   </html>