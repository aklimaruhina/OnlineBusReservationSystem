<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	require "db.php";
	if(isset($_POST['login'])){
		$username = $mysqli->real_escape_string($_POST['username']);
		$password = $mysqli->real_escape_string($_POST['password']);
		
		$query = "SELECT * FROM admin WHERE  `password` = '$password' and `username` ='$username'";
		$result = $mysqli->query($query);
		$obj= $result->fetch_object();
		if($result->num_rows > 0) // User not found. So, redirect to login_form again.
		{
		    $_SESSION['user_id']= $obj->id;
			header('location: admin/dashboard.php');
		}
		else{
			echo "invalid";
		}

	}
	
	$mysqli->close();
?>