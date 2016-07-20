<?php 
include_once 'database/config.php';
include_once 'header.php';?>
<div class="ticket-pick">
    <div class="container" style="border-bottom:2px solid #1abc9c; padding-bottom:30px">
      <div class="row">
        <div class="mid-content">
          <div class="col-lg-10">
          	<div class="row">
            	<div class="col-lg-offset-1">
             		<h3>Enter Bus and route information</h3>
              		<div class="pick-form">
                  		<form class="form-horizontal">
                    		<div class="form-group">
                      			<label for="busname" class="col-sm-2 control-label">Bus Name</label>
                      			<div class="col-sm-10">
          							    	<input type="text" class="form-control" name="bus_name" placeholder="Enter bus Name">
          							    </div>
                      		</div>
                      		<div class="form-group">
                      			<label for="businfo" class="col-sm-2 control-label">Bus Description</label>
                      			<div class="col-sm-10">
          							    	<input type="text" class="form-control" name="bus_info" placeholder="Enter bus Information">
          							    </div>
                      		</div>
                      		<div class="form-group">
                      			<label for="city_from" class="col-sm-2 control-label">From</label>
                      			<div class="col-sm-10">
                      				<select class="form-control" name="city_from">

                      					<option>----Select city----</option>
                      					<?php 
                      					$query = "SELECT * FROM `route_one` order by route_id";
                      					$result = $mysqli->query($query); 
                      					while($obj= $result->fetch_object()) {
                      						if (!$result) {
                      							die("Error: Data not Found. . ");
                      						}
                      						echo "<option value=".$obj->route_id.">".$obj->route_from."</option>"; 
                      					}
                                $result->close();
                      					 ?>
                      				</select>
							    </div>
                      		</div>
                      		<div class="form-group">
                      			<label for="city_to" class="col-sm-2 control-label">To</label>
                      			<div class="col-sm-10">
                      				<select class="form-control" name="city_to">
                      					<option>----Select city ----</option>
                      					<?php 
                      					$query = "SELECT * FROM `route_one` order by route_id";
                      					$result = $mysqli->query($query); 
                      					while($obj= $result->fetch_object()) {
                      						if (!$result) {
                      							die("Error: Data not Found. . ");
                      						}
                      						echo "<option value=".$obj->route_id.">".$obj->route_to."</option>"; 
                      					}
                      					 ?>
                      				</select>
							    </div>
                      		</div>
                      		<div class="form-group">
                      			<label for="seat" class="col-sm-2 control-label">Total Seat</label>
                      			<div class="col-sm-10">
							    	<input type="number" class="form-control" name="seat" placeholder="Enter total seat">
							    </div>
                      		</div>
                      		<div class="form-group">
                      			<label for="fare" class="col-sm-2 control-label">Enter Bus fare</label>
                      			<div class="col-sm-10">
							    	<input type="number" class="form-control" name="fare">
							    </div>
                      		</div>
                      		<div class="form-group">
                      			<label for="dtime" class="col-sm-2 control-label">Departure time</label>
                      			<div class="col-sm-10">
                      				<select class="form-control" name="dtime">
                      					<option>--------</option>
                                <?php 
                                $query = "SELECT * FROM `time_slots`";
                                $result = $mysqli->query($query); 
                                while($obj= $result->fetch_object()){
                                  if (!$result) {
                                    die("Error: Data not Found. . ");
                                  }
                                  echo "<option value=".$obj->t_id.">".$obj->dept_time."</option>"; 
                                }
                                 ?>
                              </select>
							    </div>
                      		</div>
                      		<div class="form-group">
                      			<label for="city_to" class="col-sm-2 control-label">Arrival time</label>
                      			<div class="col-sm-10">
                      				<select class="form-control" name="arrtime">
                      					<option>--------</option>
                      					<?php 
                      					$query = "SELECT * FROM `time_slots`";
                      					$result = $mysqli->query($query); 
                      					while($obj= $result->fetch_object()) {
                      						if (!$result) {
                      							die("Error: Data not Found. . ");
                      						}
                      						echo "<option value=".$obj->t_id.">".$obj->dept_time."</option>"; 
                      					}
                      					 ?>
                      				</select>
							    </div>
                      		</div>
                      		<div class="form-group">
                      			<label for="dept_date" class="col-sm-2 control-label">Departure Date</label>
                      			<div class="col-sm-10">
                      				<div class="input-group date" id="datetimepicker1">
                      					<input type="date" class="form-control" class="dept_date">
                      					<span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span></span>
                      				</div>
                      			</div>
                      		</div>
                      		<div class="form-group">
                      			<label for="arrival_date" class="col-sm-2 control-label">Arrival Date</label>
                      			<div class="col-sm-10">
                      				<div class="input-group">
                      					<input type="date" class="form-control" class="deptdate">
                      					<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                      				</div>
                      			</div>
                      		</div>
                      		<div class="col-lg-5 col-md-offset-5 pull-right" style="padding-top: 15px;">
                 				<button type="button" style="background:#1abc9c" class="form-control"><span class="glyphicon glyphicon-plus"></span>Added Buses</button>
                			</div>
                      	</form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
          <div class="ad-section text-center">
            <div class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/ad 1.gif" alt="img 1" class="img-responsive text-center">
                </div>
                <div class="item">
                  <img src="img/ad 2.jpg" alt="Img 2" class="img-responsive text-center">
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
       </div>
    </div>
  </div>
<?php include_once 'footer.php'; ?>
<script type="text/javascript">
            $(function () {
                $('#datetimepicker1').datetimepicker();
            });
        </script>