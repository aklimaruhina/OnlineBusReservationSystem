<?php 
include_once 'header.php';
include_once 'database/config.php'; 
$city_from = $_POST['city_from'];
$city_to = $_POST['city_to'];
$date1 = explode('/', $_POST['dept_date']);
$new_date1 = $date1[2].'-'.$date1[1].'-'.$date1[0];
$date2 = explode('/', $_POST['arr_date']);
$new_date2 = $date2[2].'-'.$date2[1].'-'.$date2[0];
if($_POST):	
	// $city_from = $_GET['city_from'];
	// $city_to = $_GET['city_to'];
	// $dept_date = $_GET['dept_date'];
	// $arr_date = $_GET['arr_date'];
	// $search_btn = mysqli_real_escape_string($_REQUEST['search_btn']);    
	$query = "SELECT * FROM `bus_reserve` WHERE `city_from` = '$city_from' AND `city_to` = '$city_to' AND `dept_date` = '$new_date1' AND `arr_date` = '$new_date2'";
	$result = $mysqli->query($query);

	endif;
?>

<div class="ticket-pick">
    <div class="container" style="border-bottom:2px solid #1abc9c; padding-bottom:30px">
      	<div class="row">
        	<div class="mid-content">
          		<div class="col-lg-10">
          			<div class="row">
            			<div class="col-lg-offset-1">
             				<h3>About Available Bus information</h3>
                            <table class="table hover">
                                <thead>
                                    <tr>
                                        <th>Operator(Bus type)</th>
                                        <th>Dep.time</th>
                                        <th>Arr.time</th>
                                        <th>Seats Available</th>
                                        <th>Fare</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    while($row = mysqli_fetch_assoc($result)){?>
                                    <tr>
                                        <td><?php echo $row['bus_name'].'<br>'.$row['bus_info'].'<br> Route:'.$row['city_from']."-".$row['city_to'] ?></td>
                                        <td><?php echo $row['dtime'] ?></td>
                                        <td><?php echo $row['arrtime'] ?></td>
                                        <td><?php echo $row['seat'] ?></td>
                                        <td><?php echo $row['fare'] ?></td>
                                        <td><a href="selectseat.php?id=<?php echo $row['id'] ?>">Choose your seat</a></td>
                                    </tr>
                                       
                            <?php
                        }?>
                                </tbody>
                            </table>
             				

         				</div>
         			</div>
         		</div>
         	</div>
        </div>
    </div>
</div>
   