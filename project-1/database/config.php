<?php 
$mysqli = new mysqli("localhost","root","","ticket");


if(mysqli_connect_errno()){
	printf("Connection failed: %s\n", mysqli_connect_errno());
	exit();
}
 ?>