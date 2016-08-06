<?php include_once 'header.php';
include_once 'database/config.php';
$id = $_GET['id'];
$hall_name = $_GET['hallname'];
$query = "SELECT * FROM `seat_cat` where hall_name = '$hall_name'";
$result = $mysqli->query($query); 

 ?>
<div class="now-showing">
    <div class="container">
      	<div class="row">
        	
        	<div class="col-lg-8">
	        		<div class="jumbotron">
	        			
	        			<form action="showlist.php?id=<?php echo $id."Hall name = ".$hall_name ?>" class="form-horizontal">
	        				<div class="form-group">
	        					<input type="hidden" value="<?php echo $id?>" name="id">
	        					<input type="hidden" value="<?php echo $hall_name?>" name="hallname">
	        				</div>
	        			<div class="form-group">
	        				<label class="col-sm-2 control-label">Select Seat Category</label>
	        				<div class="col-sm-6">

	        					<select name="seatcat" class="form-control">
	        						<option>Select Movie category</option>
	        						<?php 
	                                // $query = "SELECT * FROM `seat_cat` where hall_name = ".$hall_name;
	                                
	                                while($obj= $result->fetch_object()) {
	                                  if (!$result) {
	                                    die("Error: Data not Found. . ");
	                                  }
	                                  echo "<option value=".$obj->id.">".$obj->seat_name."</option>"; 
	                                }
	                                $result->close();
	                                 ?>
	        					</select>
	        				</div>
	        			</div>
	        			<div class="form-group">
	        				<label for="" class="col-sm-2 control-label">Your time</label>
	        				<div class="col-sm-6">
	        					<?php
	        					$query = "SELECT showtime from hall_register WHERE id = ".$id;
	        					$result = $mysqli->query($query);
	        					$row =  $result->fetch_object();
	        					 ?>
	        					 <input type="text" class="form-control" name="showtime" value="<?php echo $row->showtime ?>">
	        				</div>
	        			</div>
	        			<div class="form-group">
	        				<label class="col-sm-2 control-label">Select Quantity</label>
	        				<div class="col-sm-6">
	        					<select name="quantity" id="" class="form-control">
	        						<option value="1">1</option>
	        						<option value="2">2</option>
	        						<option value="3">3</option>
	        						<option value="4">4</option>
	        						<option value="5">5</option>
	        					</select>
	        				</div>
	        			</div>
	        			
	        			<div class="form-group">
	        				<button type="submit" class="btn btn-primary">Book ticket</button>
	        			</div>
	        		</div>
        		</form>
        	</div>
    	</div>
    </div>
</div>
<?php include_once 'footer.php'; ?>