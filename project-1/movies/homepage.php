<?php 
	session_start(); 
	include 'include/config.php';
	$path = $config->base_url.'/homepage.php';
	$signout = $config->base_url.'/functions/logout.php';
	$signuser = $config->base_url.'/profile.php';
	$signin = $config->base_url.'/login.php#wrapper';
	$signup = $config->base_url.'/registration.php#wrapper';
	include_once 'header.php';
?>
<?php include 'footer.php'; ?>