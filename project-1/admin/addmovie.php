<?php 
include_once '../database/config.php';
if ($_POST): 
 	
 	$mvname = $_POST['mvname'];
 	$mvdescription = $_POST['mvdescription'];
 	$date1 = explode('/', $_POST['rldate']);
	$new_date1 = $date1[2].'-'.$date1[1].'-'.$date1[0];
	$date2 = explode('/', $_POST['showdate']);
	$new_date2 = $date2[2].'-'.$date2[1].'-'.$date2[0];
	$director = $_POST['director'];
	$hallname = $_POST['hallname'];
	$filetmp = $_FILES["moviepic"]["tmp_name"];
	$filename = $_FILES["moviepic"]["name"];
	$filetype = $_FILES["moviepic"] ["type"];
	$filepath = "../files/".$filename;
	move_uploaded_file($filetmp, $filepath); 
	$query = "INSERT INTO `movie_reserve` (`id`, `mvname`, `mvdescription`, `rldate`, `director`, `showdate`, `hallname`, `moviepic`) VALUES (NULL, '$mvname', '$mvdescription', '$new_date1', '$director', '$new_date2', '$hallname', '$filepath')";
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