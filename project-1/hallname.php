<?php include_once 'header.php'; 
include_once 'database/config.php';

?>
<div class="now-showing">
    <div class="container">
      	<div class="row">
        	<div class="col-lg-12">
          		<h4>Add Hall information</h4>
          		<div class="row" style="padding-top: 15px;">
          			<form action="addhall.php" method="post" class="form-horizontal">
          				<div class="form-group">
          					<label for="" class="col-sm-3 control-label">Hall name</label>
	        				<div class="col-sm-6">
                    <select name="hallname" id="" class="form-control">
                      <option>Select hall name</option>
                      <?php 
                      $query = "SELECT * FROM `hall_reg` ";
                      $result = $mysqli->query($query); 

                                  while($obj= $result->fetch_object()) {
                                    if (!$result) {
                                      die("Error: Data not Found. . ");
                                    }
                                    echo "<option value= '".$obj->hall_name."'>".$obj->hall_name."</option>"; 
                                  }
                                  $result->close();
                       ?>
                    </select>
	        					
	        				</div>
	        			</div>
	        			<div class="form-group">
	        				<label for="" class="col-sm-3 control-label">Select Movie name</label>
	        				<div class="col-sm-6">
		        				<select name="mvname" id="" class="form-control">
		        					<option>----Select Movie Name----</option>
	                                <?php 
	                                $query = "SELECT * FROM `movie_reserve`";
	                                $result = $mysqli->query($query); 
	                                while($obj= $result->fetch_object()) {
	                                  if (!$result) {
	                                    die("Error: Data not Found. . ");
	                                  }
	                                  echo "<option value= '".$obj->mvname."'>".$obj->mvname."</option>"; 
	                                }
	                                $result->close();
	                                 ?>
		        				</select>
	        				</div>
	        			</div>
	        			<div class="form-group">
                            <label for="dtime" class="col-sm-3 control-label">Add time</label>
                            <div class="col-sm-6">
                              <div class="input-group date" id="showtime">
                                <input type="date" class="form-control" name="showtime">
                                <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-time"></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                          	<label for="" class="col-sm-3 control-label">Seat Name One</label>
                          	<div class="col-sm-6">
                          		<input type="text" name="seat_one" class="form-control">
                          	</div>
                          </div>
                          <div class="form-group">
                          	<label for="" class="col-sm-3 control-label">Seat Price</label>
                          	<div class="col-sm-6">
                          		<input type="text" name="seat_price1" class="form-control">
                          	</div>
                          </div>
                          <div class="form-group">
                          	<label for="" class="col-sm-3 control-label">Seat Name Two</label>
                          	<div class="col-sm-6">
                          		<input type="text" name="seat_two" class="form-control">
                          	</div>
                          </div>
                          <div class="form-group">
                          	<label for="" class="col-sm-3 control-label">Seat Price</label>
                          	<div class="col-sm-6">
                          		<input type="text" name="seat_price2" class="form-control">
                          	</div>
                          </div>
                          <div class="form-group">
                          	<div class="col-sm-6 col-lg-offset-3">
                          		<button type="submit" style="background:#1abc9c" class="form-control"><span class="glyphicon glyphicon-plus"></span>Add Hall information</button>
                          	</div>
                          </div>


          			</form>
         		</div>
      		</div>
 	 	</div>
	</div>
</div>
<?php include_once 'footer.php'; ?>
<script type="text/javascript">
          $(document).ready(function(){
             
             $('#showtime').datetimepicker({
                    format: 'LT'
                });
          });
                     
        </script>