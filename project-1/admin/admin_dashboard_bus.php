<?php 
include_once 'header.php'; 
include_once '../database/config.php';
$query = "SELECT * FROM `bus_reserve` ";
$result = $mysqli->query($query);
$row_cnt = $result->num_rows;

?>
<div class="content-table">
		<div class="container">
			<div class="col-lg-12">
		        <table class="table table-bordered">
		        	<thead>
		        		<tr class="active">
		        			<th>#ID</th>
				            <th>Bus Information</th>
				            <th>Route</th>
				            <th>Total Seat</th>
				            <th>Price</th>
				            <th>Time</th>
				            <th>Date </th>
				            <th>Action</th>
		          		</tr>
		        	</thead>
		          	<tbody>
		          		<?php
		          		if($row_cnt > 0){
		          			while ($row_cnt = $result->fetch_assoc()) { ?>
		          			<tr>
					            <td>
					            	<?php echo $row_cnt['id'] ?>
					            </td>
					            <td>
					            	<?php echo $row_cnt['bus_name']." <br/>".$row_cnt['bus_info'] ?>
					            </td>
					            <td>
					            	<?php echo $row_cnt['city_from']." - ".$row_cnt['city_to'] ?>
					            </td>
					            <td>
					            	<?php echo $row_cnt['seat'] ?>
					            </td>
					            <td>
					            	<?php echo $row_cnt['fare'] ?>
					            </td>
					            <td>
					            	<?php echo $row_cnt['dtime']."-".$row_cnt['arrtime'] ?>
					            </td>
					            <td>
					            	<?php echo $row_cnt['dept_date']. "/". $row_cnt['arr_date'] ?>
					            </td>
					            <td>
					            	 <a href="editbus.php?id=<?php echo $row_cnt['id'] ?>" class="btn btn-primary">Edit Bus</a>
					            	 <a href="showbus.php?id=<?php echo $row_cnt['id'] ?>" class="btn btn-info">Show Bus</a>
					            	 <a href="deletebus.php?id=<?php echo $row_cnt['id'] ?>" class="btn btn-danger">Delete Bus</a>
					            </td>
		            		</tr>

		          			<?php
		          				# code...
		          			}
		          		} 
		          		 ?>
		          		
		          	</tbody>
		          	

		        </table>
			</div>
		</div>
	</div>
<?php include_once 'footer.php'; ?>