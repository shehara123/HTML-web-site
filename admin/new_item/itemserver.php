<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'csproject');

	// initialize variables
	
	$ser = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$ser = $_POST['sc'];
		
		

		mysqli_query($db, "INSERT INTO pri ( ser_cod) VALUES('$ser')"); 
		
		echo'<script type="text/javascript">';
	            echo'alert("New Item Added");
				window.location.href="item.php"';
	            echo'</script>';
	
	}
	
	


if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM pri WHERE id=$id");

      echo'<script type="text/javascript">';
	            echo'alert("Item Deleted");
				window.location.href="item.php"';
	            echo'</script>';
	
	}

?>

