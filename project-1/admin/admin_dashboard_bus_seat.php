<?php 

include_once 'header.php'; 
include('../database/config.php');
$query = "SELECT * FROM `reserve_list` ";
$result = $mysqli->query($query);
$row_cnt = $result->num_rows;
?>
<div class="content-table">
	<div class="container">
		<div class="col-lg-12">
		    <table class="table table-bordered">
		      <tr class="active">
		        <th>Date</th>
		        <th>Seat number</th>
		        <th>Transection code</th>
		        <th>Seat Remains</th>
		        <th>Action</th>
		      </tr>
		      <tr>
		        <td></td>
		        <td></td>
		        <td></td>
		        <td></td>
		        </tr>
		    </table>
		</div>
	</div>
</div>
<?php include_once 'footer.php'; ?>