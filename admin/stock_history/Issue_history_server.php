<?php
            $sdate="";
			$edate="";
			$code2="";
            $query="";
			
    if(isset($_POST['show'])){
		
		$code2=$_POST['code'];
		$sdate=$_POST['fdate'];
	    $edate=$_POST['edate'];
		 
		 
		$sql3="SELECT * FROM issue LEFT JOIN purchasing ON 
		issue.code = purchasing.pcode WHERE issue.code='$code2'
		AND issue.date BETWEEN '$sdate' AND '$edate'"; 
		
		
		$query=mysqli_query($conn,$sql3);
		
		$numrow=mysqli_num_rows($query);
		
		$numfld=mysqli_num_fields($query);
		
		if($numrow > 0){
			
			echo '<table border="1">
			<thead><th colspan="3">ISSUE</th>
			<th colspan="3">PURCHACING</th></thead>
			<tr><td>Date</td><td>Quntity</td><td>Description</td>
			<td>Date</td><td>Quntity</td><td>Suppliar</td>
			</tr>';
			while($row =mysqli_fetch_assoc($query)){
			echo"<tr>";
			"<td>". $row ["code"]."</td>";
			echo"<td>". $row ["date"]."</td>";
			echo"<td>". $row ["qty"]."</td>";
			echo"<td>". $row ["description"]."</td>";
			echo"<td>". $row ["pdate"]."</td>";
			echo"<td>". $row ["pqty"]."</td>";
			echo"<td>". $row ["supp_cod"]."</td>";
			echo
			"</tr>";}
			echo'<table>';
			
		}
		else{
			 echo'<script type="text/javascript">';
	            echo'alert("please enter valid time")';
	            echo'</script>';
		}
	}
?>