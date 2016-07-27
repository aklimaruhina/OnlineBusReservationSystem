<?php 
include_once 'database/config.php';
if($_POST):
	$bus_name = $_POST['bus_name'];
	$bus_info = $_POST['bus_info'];
	$city_from = $_POST['city_from'];
	$city_to = $_POST['city_to'];
	$seat = $_POST['seat'];
	$fare = $_POST['fare'];
	$dt = $_POST['dtime'];
	$at = $_POST['arrtime'];
	$dt=date('H:i:s p',strtotime($dt));
	$at=date('H:i:s p', strtotime($at));
	$date1 = explode('/', $_POST['dept_date']);
	$new_date1 = $date1[2].'-'.$date1[1].'-'.$date1[0];
	$date2 = explode('/', $_POST['arr_date']);
	$new_date2 = $date2[2].'-'.$date2[1].'-'.$date2[0];
	// $date1 = $_POST['dept_date'];
	// $date1=date('Y-m-d',strtotime($date1));
	// $date2 = $_POST['arr_date'];
	// $date2=date('Y-m-d',strtotime($date2));
	// $date1 = mysqli_real_escape_string($_POST['dept_date']);
	// $date1 = date('Y-m-d', strtotime(str_replace('-', '/', $date1)));

	// $date1 = date('Y-m-d', strtotime(str_replace('-', '/', $date1)));
	// $dept_date = $_POST['dept_date'];
	// $date2= mysqli_real_escape_string($_POST['arr_date']);
	// $date2 = date('Y-m-d', strtotime(str_replace('-', '/', $date2)));

	// $arr_date = $_POST['arr_date'];
	$query = "INSERT INTO `bus_reserve` (`id`, `bus_name`, `bus_info`, `city_from`, `city_to`, `seat`, `fare`, `dtime`, `arrtime`, `dept_date`, `arr_date`) VALUES (NULL, '$bus_name', '$bus_info', '$city_from', '$city_to', '$seat', '$fare', '$dt', '$at', '$new_date1', '$new_date2')";
	$result = $mysqli->query($query);
	if(!$result){
		echo "You have error in your database........";
		echo "<br>";
	}
	else{
		echo "You have successfully submitted";
		exit();
	}
	endif;
 ?>