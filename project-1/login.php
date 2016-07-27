<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	require "database/config.php";
	if(isset($_POST['login'])){
		$username = $mysqli->real_escape_string($_POST['uname']);
		$password = $mysqli->real_escape_string($_POST['password']);
		
		$query = "SELECT * FROM admin WHERE  `password` = '$password' and `username` ='$username'";
		$result = $mysqli->query($query);
		$obj= $result->fetch_object();
		if($result->num_rows > 0) // User not found. So, redirect to login_form again.
		{
		    $_SESSION['user_id']= $obj->id;
			header('location: admin/admin_dashboard.php');
		}
		else{
			header('localtion: index.php');
		}

	}
	
	$mysqli->close();
?>