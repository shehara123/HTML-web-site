<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'csproject');

	// initialize variables
	$code = "";
	$des = "";
	$qty = "";
	$qty1 ="";
	$qty2 ="";
	$id = 0;
	$update = false;

	if (isset($_POST['update'])) {
		$code = $_POST['code'];
		$des = $_POST['des'];
		$date = date("m/d/y");

		mysqli_query($db, "INSERT INTO issue (code,description,date) VALUES ('$code', '$des','$date')"); 
		$_SESSION['message'] = "issued"; 
		header('location: issue.php');
	}
	
	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$qty1 = $_POST['qty1'];
	$qty2 = $_POST['qty2'];
	$qty3 = $qty1 - $qty2;

	mysqli_query($db, "UPDATE admin_code SET qty='$qty3' WHERE id=$id");
	$_SESSION['message'] = "item issued!"; 
	header('location: issue.php');
}



