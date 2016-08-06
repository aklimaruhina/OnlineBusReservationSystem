<?php 
$con = mysqli_connect("localhost","root","","book_myshow") or die("Error " . mysqli_error($con));
$config=array();
$config['base_url']='http://localhost/OnlineBusReservationSystem/project-1/movies';
$config=(object)$config;
 ?>