<?php
	include('../db.php');
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	$query = "UPDATE customer SET status='$status' WHERE id='$roomid'";
	$result = $mysqli->query($query) or die("error");
	if(!$result){
		echo "There is error to edit";
		echo "</br>";
	}
	else{
	header("location: dashboard.php");
	exit();
}
?>