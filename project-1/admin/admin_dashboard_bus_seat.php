<?php 

include_once 'header.php'; 
include('../database/config.php');
$query = "SELECT * FROM `reserve_section` ";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row_cnt = $result->num_rows;
?>
<div class="content-table">
	<div class="container">
		<div class="col-lg-12">
		    <table class="table table-bordered">
		    	<thead>
		    		<tr class="active">
				        <th>Date</th>
				        <th>Seat number</th>
				        <th>Transection code</th>
				        <th>Seat Remains</th>
				        <th>Action</th>
				      </tr>
		    	</thead>
		    	<tbody>
		    		<?php if ($row_cnt>0):
		    		while ($row_cnt = $result->fetch_assoc()) { ?>
		    		 	<tr>
					        <td><?php echo $row_cnt['date'] ?></td>
					        <td><?php echo $row_cnt['setnum'] ?></td>
					        <td><?php echo $row_cnt['transaction_code'] ?></td>
					        <td><?php echo $row_cnt['seat'] ?></td>
					        </tr>
		    		<?php } 
		    		?>
		    			
		    		<?php endif ?>
		    	</tbody>
		      
		      
		    </table>
		</div>
	</div>
</div>
<?php include_once 'footer.php'; ?>