<?php 
include_once 'database/config.php';
$id = 15;

$hallname= "Utshob";

	$seatcat = 5;
$quantity = 3;
// $time = $_POST['showtime'];
// $time=18:00:00;

$query = "SELECT * FROM hall_register where id = '$id'"; 
$result = $mysqli->query($query);
while ($row = $result->fetch_object()) {
	$seat1 = $row->seat_one;
	$seat2 = $row->seat_two;
	if (isset($seatcat) == $seat1) {
		$query2 = "SELECT * FROM `seat_cat` where seat_name = $seat1";
		$result2 = $mysqli->query($query2);
		while ($rows = $result2->fetch_object()) {
			$noofseat = $rows->num_of_seat;
		}

	}
	
	var_dump($noofseat);
	// if(isset($seatcat))
}




?>