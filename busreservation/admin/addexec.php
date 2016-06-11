<?php
include('../db.php');
$type=$_POST['type'];
$route=$_POST['route'];
$price=$_POST['price'];
$seat=$_POST['seat'];
$time=$_POST['time'];
$query = "INSERT INTO route (type, price, numseats, route, time) VALUES('$type','$price','$seat','$route','$time')";
$result = $mysqli->query($query);
if($result){
header("location: route.php");
exit();
}
else{
	echo "error to insert";
}
?>
