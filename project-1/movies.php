<?php 
include_once 'header.php';
include_once 'database/config.php';
$query = "SELECT * FROM `movie_reserve` ";
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row_cnt = $result->num_rows;?>
<div class="now-showing">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h4>Now Showing</h4>
          <div class="row" style="padding-top: 15px;">
          	<?php if ($row_cnt>0){
          	while ($row_cnt = $result->fetch_assoc()){?>

          	<div class="col-lg-3">
	            <div class="well text-center">
	              <img src="project-1/<?php echo $row_cnt['moviepic'];?>" width="170" height="240">
	              <div class="well-footer">
	                <a href="#"><?php echo $row_cnt['mvname'] ?></a>
	                  <p>Date:<?php echo $row_cnt['showdate'] ?></p>
	                  <a href="movieticketdetails.php?id=<?php echo $row_cnt['id']?>" style="background:#1abc9c" class="form-control btn">Buy Tickets</a>
	              </div>
	            </div>
            </div>

          		<?php

          	}
          	}
          	else{
          		echo "No data found";
          } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php include_once 'footer.php'; ?>