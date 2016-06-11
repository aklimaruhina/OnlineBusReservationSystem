<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../db.php');
if($_GET['id'])
{
	$id=$_GET['id'];
	$query = "DELETE from route where id='$id'";
	$result = $mysqli->query($query);
	 header("location: route.php");
}

?>