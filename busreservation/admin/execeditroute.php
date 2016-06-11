<?php
	include('../db.php');
	$roomid = $_POST['roomid'];
	$type=$_POST['type'];
	$route=$_POST['route'];
	$price=$_POST['price'];
	$seat=$_POST['seat'];
	$time=$_POST['time'];
	$query = "UPDATE route SET type='$type', price='$price', route='$route', numseats='$seat', time='$time' WHERE id='$roomid'";
	$result = $mysqli->query($query) or die("error");
	if(!$result){
		echo "There is error to edit";
		echo "</br>";
	}
	else{
	header("location: route.php");
	exit();
}
?>