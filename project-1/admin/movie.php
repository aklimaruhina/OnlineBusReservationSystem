<?php include_once 'header.php'; ?>
<div class="content-table">
	<div class="container">
		<div class="col-lg-12">
			<h3 class="text-center">Add New movie and Its Information</h3><br>
		    <form action="addmovie.php" method="post" class="form-horizontal" enctype="multipart/form-data">
				<div class="form-group">
					<label for="movie name" class="col-sm-4 control-label">Enter Movie Name</label>
          			<div class="col-sm-8">
				    	<input type="text" class="form-control" name="mvname" placeholder="Enter Movie Name Name">
				    </div>
				</div>
			    <div class="form-group">
					<label for="movie description" class="col-sm-4 control-label">Enter Movie Description</label>
          			<div class="col-sm-8">
				    	<textarea name="mvdescription" rows="3" class="form-control"></textarea>
				    </div>
				</div>
				<div class="form-group">
					<label for="releasedate" class="col-sm-4 control-label">Release Date</label>
					<div class="col-sm-8">
						<div class="input-group date" id="date1">
          					<input type="date" class="form-control" name="rldate" data-format="yyyy-MM-dd" placeholder="Enter Release Date">
          					<span class="input-group-addon">
                      			<span class="glyphicon glyphicon-calendar"></span></span>
          				</div>
					</div>
				</div>
				<div class="form-group">
					<label for="director" class="col-sm-4 control-label">Director Name</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name ="director" placeholder="Enter Director name">
					</div>
				</div>
				<div class="form-group">
					<label for="showdate" class="col-sm-4 control-label">Show Date</label>
					<div class="col-sm-8">
						<div class="input-group date" id="date2">
          					<input type="date" class="form-control" name="showdate" data-format="yyyy-MM-dd" placeholder="Enter Movie Show Date">
          					<span class="input-group-addon">
                      			<span class="glyphicon glyphicon-calendar"></span></span>
          				</div>
					</div>
				</div>
				<div class="form-group">
					<label for="hallname" class="col-sm-4 control-label">Enter Cinemahall Name</label>
					<div class="col-sm-8">
						<input type="text" class="form-control" name ="hallname" placeholder="Enter Movie Hall name">
					</div>
				</div>
				
				<div class="form-group">
					<label for="" class="col-sm-4 control-label">Upload Picture</label>
					<div class="col-sm-6">
						<input type="file" id="moviepic" name="moviepic">
					</div>
				</div>
				<div class="col-lg-8 col-lg-offset-3" style="padding-top: 15px;">
                  <button type="submit" name="movie_btn" style="background:#1abc9c" class="form-control"><span class="glyphicon glyphicon-plus"></span>Add new movie</button>
                </div>

			</form>
		</div>
	</div>
</div>
<?php include_once 'footer.php'; ?>
 <script type="text/javascript">
          $(document).ready(function(){
             $('#date1').datetimepicker({
                 format: 'DD/MM/YYYY'
              });
             $('#date2').datetimepicker({
                 format: 'DD/MM/YYYY'
              });
          });
                     
        </script>