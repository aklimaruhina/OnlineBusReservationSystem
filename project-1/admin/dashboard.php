<?php
	include('../database/config.php');
    include('../session.php'); 
    $query = "SELECT * from admin where id ='$session_id'";
    $result = $mysqli->query($query) or die("error in session");
    $obj= $result->fetch_object();
  
?>
<div class="text-center">
Hi
<strong><?php echo $obj->username; ?></strong>
!
<br>
<a href="../logout.php">Logout</a>
</div>
