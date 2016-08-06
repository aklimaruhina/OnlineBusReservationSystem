<?php 
include_once 'database/config.php';
if ($_POST): 
 	
 	$mvname = $_POST['mvname'];
 	$hallname = $_POST['hallname'];
 	$showtime = $_POST['showtime'];
	$showtime=date('H:i:s p',strtotime($showtime));
 	$seat_one = $_POST['seat_one'];
 	$seat_two = $_POST['seat_two'];
 	$seat_price1 = $_POST['seat_price1'];
 	$seat_price2 = $_POST['seat_price2'];
	$query = "INSERT INTO `hall_register` (`id`, `hall_name`, `mvname`, `showtime`, `seat_one`, `seat_price1`, `seat_two`, `seat_price2`) VALUES (NULL, '$hallname', '$mvname', '$showtime', '$seat_one', '$seat_price1', '$seat_two', '$seat_price2')";
	
	$result = $mysqli->query($query);
	if(!$result){
		echo "You have error in your database........";
		echo "<br>";
	}
	else{
		echo "successfully printed";
		exit();
	}

 endif;

?>