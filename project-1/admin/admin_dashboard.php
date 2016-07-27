<?php 
include_once 'header.php'; 
include_once '../database/config.php';
$query = "SELECT `firstname`,`lastname`,`contact`,`address`,`setnum`,`transaction_code`,`payable`,`city_from`,`city_to`,`bus_info`, `dtime`, `arrtime` FROM reserve_section INNER JOIN bus_reserve on reserve_section.busno = bus_reserve.id ";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row_cnt = $result->num_rows;
?>


	<div class="content-table">
		<div class="container">
			<div class="col-lg-12">
                <table class="table table-bordered">
                    <thead>
                        <tr class="active">
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Contact</th>
                            <th>Route</th>
                            <th>Bus type</th>
                            <th>Time</th>
                            <th>Seat number</th>
                            <th>Payable</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($row_cnt>0): ?>
                        <?php while ($row_cnt = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $row_cnt['firstname'] ?></td>
                                <td><?php echo $row_cnt['lastname'] ?></td>
                                <td><?php echo $row_cnt['address'] ?></td>
                                <td><?php echo $row_cnt['contact'] ?></td>
                                <td><?php echo $row_cnt['city_from']."-".$row_cnt['city_to'] ?></td>
                                <td><?php echo $row_cnt['bus_info'] ?></td>
                                <td><?php echo $row_cnt['dtime']." -".$row_cnt['arrtime'] ?></td>
                                <td><?php echo $row_cnt['setnum']; ?></td>
                                <td><?php echo $row_cnt['payable']; ?></td>
                                <td></td>
                                <td></td>
                              </tr>
                            <?php 
                        } ?>       
                            
                        <?php endif ?>
                    </tbody>
                  
                  
                </table>
			</div>
		</div>
	</div>
<?php include_once 'footer.php'; ?>