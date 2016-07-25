<?php include_once 'header.php'; 
include_once 'database/config.php';
$id=$_GET['id'];
$setnum=$_GET['setnum'];

?>

<div class="ticket-pick">
    <div class="container" style="border-bottom:2px solid #1abc9c; padding-bottom:30px">
      	<div class="row">
        	<div class="mid-content">
          		<div class="col-lg-10 col-lg-offset-1">
          			<div class="row">
             			<h3>About your ticket Information</h3>
             			<table class="table hover">
             				<tbody>
             					<?php 
             					$query = "SELECT * FROM `reserve_section` WHERE `transaction_code` = '$id' ";
								
								$result = $mysqli->query($query);
             					while($obj = $result->fetch_object()){
             					 ?>
             					<tr>
             						<td>Transaction number</td>
             						<td><?php echo $obj->transaction_code; ?></td>
             					</tr>
             					<tr>
             						<td>Full Name: </td>
             						<td><?php echo $obj->firstname." ".$obj->lastname; ?></td>
             					</tr>
             					<tr>
             						<td>Address</td>
             						<td><?php echo $obj->address; ?></td>
             					</tr>
             					<tr>
             						<td>Contact Information: </td>
             						<td><?php echo $obj->contact; ?></td>
             					</tr>
             					<tr>
             						<td>Seat Number</td>
             						<td><?php echo $obj->setnum; ?></td>
             					</tr>
             					<tr>
             						<td>Payable: </td>
             						<td><?php echo $obj->payable; ?></td>
             					</tr>

             					<?php 
             				}
             					$query1= "SELECT * FROM `reserve_list` WHERE `transaction_code` = '$id' " ;
             					$result1 = $mysqli->query($query1);
             					while($row1 = $result1->fetch_object()){
             						$busno=$row1->busno;
             					
             					 ?>
             					<tr>
             						<td>Route and Type of Bus:</td>
             						<?php 
             						$query2 = "SELECT * FROM `bus_reserve`  WHERE id= ".$busno; 
             						$result2 = $mysqli->query($query2);
             						while($row2 = $result2->fetch_object()){
             						?>

             						<td><?php echo $row2->city_from."-".$row2->city_to."<br> ".$row2->bus_info ?></td>
             					</tr>
             					<tr>
             						<td>Departure time</td>
             						<td><?php echo $row2->dtime ?></td>
             					</tr>
             					<tr>
             						<td>Date Of Travel:</td>
             						<td><?php echo $row2->dept_date ?></td>
             					<?php }  
             				}
             			?>
             					</tr>
             				</tbody>
             			</table>
        			</div>
      			</div>
        	</div>
       </div>
    </div>
</div>

<?php include_once 'footer.php'; 
$mysqli->close();
?>