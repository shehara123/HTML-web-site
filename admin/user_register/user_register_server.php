<?php

$con = mysqli_connect('localhost', 'root', '','csproject');

if(!$con)die("connection failed:".mysqli_connect_error());

if (isset($_POST['submit'])); {
$user = $_POST['user_name'];
$password = $_POST['password'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$pos = $_POST['position'];


	
$sql = "INSERT INTO `userinfo` (`username`, `password`, `firstname`,`lastname`,`position`) 
VALUES ('$user', '$password', '$fname', '$lname','$pos')";

$rs = mysqli_query($con, $sql);

if($rs){echo "record saved";}
}

?>