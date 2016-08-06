<?php include_once 'header.php'; ?>
<div class="content-table">
	<div class="container">
		<div class="col-lg-12">
			<form action="cabinseat.php" method="post" class="form-horizontal">
				
				<div class="form-group">
          			<label for="launchname" class="col-sm-4 control-label">Enter Lunch Name</label>
          			<div class="col-sm-8">
				    	<input type="text" class="form-control" name="launch_name" placeholder="Enter Launch Name">
				    </div>
          		</div>
				
				<div class="form-group">
          			<label for="launchname" class="col-sm-4 control-label">Enter Lunch Information</label>
          			<div class="col-sm-8">
				    	<input type="text" class="form-control" name="launch_info" placeholder="Enter Launch Information">
				    </div>
          		</div>
          		<div class="form-group">
          			<label for="city_from" class="col-sm-4 control-label">From</label>
          			<div class="col-sm-8">
          				<select class="form-control" name="city_from">

          					<option>----Select city----</option>
          					<?php 
          					$query = "SELECT * FROM `route_one`";
          					$result = $mysqli->query($query); 
          					while($obj= $result->fetch_object()) {
          						if (!$result) {
          							die("Error: Data not Found. . ");
          						}
          						echo "<option value=".$obj->route_from.">".$obj->route_from."</option>"; 
          					}
                    	$result->close();
          					 ?>
          				</select>
				    </div>
          		</div>
          		<div class="form-group">
          			<label for="city_to" class="col-sm-4 control-label">To</label>
          			<div class="col-sm-8">
          				<select class="form-control" name="city_to">
          					<option>----Select city ----</option>
          					<?php 
          					$query = "SELECT * FROM `route_one`";
          					$result = $mysqli->query($query); 
          					while($obj= $result->fetch_object()) {
          						if (!$result) {
          							die("Error: Data not Found. . ");
          						}
          						echo "<option value=".$obj->route_to.">".$obj->route_to."</option>"; 
          					}
          					 ?>
          				</select>
				    </div>
          		</div>
          		<div class="form-group">
          			<label for="fare" class="col-sm-4 control-label">Enter Min fare</label>
          			<div class="col-sm-8">
				    	<input type="number" class="form-control" name="minfare">
				    </div>
          		</div>
          		<div class="form-group">
          			<label for="fare" class="col-sm-4 control-label">Enter Max fare</label>
          			<div class="col-sm-8">
				    	<input type="number" class="form-control" name="maxfare">
				    </div>
          		</div>
              	<div class="form-group">
	                <label for="dtime" class="col-sm-4 control-label">Departure time</label>
	                <div class="col-sm-8">
	                  <div class="input-group date" id="ltime1">
	                    <input type="date" class="form-control" name="dtime">
	                    <span class="input-group-addon">
	                      <span class="glyphicon glyphicon-time"></span>
	                  	</span>
	                  </div>
	                </div>
              	</div>
          		
              	<div class="form-group">
	                <label for="arrtime" class="col-sm-4 control-label">Arrival time</label>
	                <div class="col-sm-8">
	                  <div class="input-group date" id="ltime2">
	                    <input type="date" class="form-control" name="arrtime">
	                    <span class="input-group-addon">
	                      <span class="glyphicon glyphicon-time"></span>
	                  	</span>
	                  </div>
	                </div>
              	</div>
          		<div class="form-group">
          			<label for="dept_date" class="col-sm-4 control-label">Departure Date</label>
          			<div class="col-sm-8">
          				<div class="input-group date" id="ldate1">
          					<input type="date" class="form-control" name="dept_date" data-format="yyyy-MM-dd">
          					<span class="input-group-addon">
                      			<span class="glyphicon glyphicon-calendar"></span></span>
          				</div>
          			</div>
          		</div>
          		<div class="col-lg-5 col-md-offset-5 pull-right" style="padding-top: 15px;">
     				<button type="submit" style="background:#1abc9c" class="form-control"><span class="glyphicon glyphicon-plus"></span>Add New launch</button>
    			</div>
			</form>
		</div>
	</div>
</div>
<?php include_once 'footer.php'; ?>
<script type="text/javascript">
          $(document).ready(function(){
             $('#ldate1').datetimepicker({
                 format: 'DD/MM/YYYY'
              });
             $('#ltime1').datetimepicker({
                    format: 'LT'
                });
             $('#ltime2').datetimepicker({
                    format: 'LT'
                });
          });
                     
        </script>