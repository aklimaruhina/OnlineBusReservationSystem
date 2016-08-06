<?php include_once 'header.php';
include_once 'database/config.php';
$id = $_GET['id'];
$query = "SELECT * FROM `movie_reserve` where `id` = ".$id;
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
$row = $result->fetch_assoc();
 ?>
<div class="now-showing">
    <div class="container">
      	<div class="row">
        	<div class="col-lg-4">
        		<ul class="list-group">
					<li class="list-group-item"><?php echo  $row['mvname']; ?></li>
					<li class="list-group-item"><?php echo $row['hallname'] ?></li>
					<li class="list-group-item"><img src="project-1/<?php echo $row['moviepic'];?>" width="170" height="240" class="img-responsive"></li>
					<li class="list-group-item">Release Date: <?php echo $row['rldate'] ?></li>
					<li class="list-group-item">Director Name: <?php echo $row['director'] ?></li>
				</ul>
        	</div>
        	<div class="col-lg-8">
        		<?php 
        		$query2 = "SELECT m.mvname, h.* from movie_reserve as m INNER JOIN hall_register as h on m.mvname = h.mvname where m.id='$id' ";
        		$result = $mysqli->query($query2) or trigger_error($mysqli->error."[$query]");
        		$row_cnt = $result->num_rows;

        		if($row_cnt > 0 ){

        		while ($row_cnt = $result->fetch_assoc()) { ?>
        		<div class="jumbotron">
        			<h3><span class="glyphicon glyphicon-home"></span>Hall: <?php echo $row_cnt['hall_name'] ?></h3>
        			<p>Time: <?php echo $row_cnt['showtime'] ?></p>

        			<p><label for="">Seat Name: <?php echo $row_cnt['seat_one']." Price: ".$row_cnt['seat_price1'] ?></label></p>
					
					<p><label for="">Seat Name: 
                        <?php echo $row_cnt['seat_two']." Price: ".$row_cnt['seat_price2'] ?>
                    </label></p>
					<a href="selectmovieseat.php?id=<?php echo $row_cnt['id'] ?>&&hallname=<?php echo $row_cnt['hall_name']?>&&time=<?php echo urldecode( $row_cnt['showtime']) ?>" class="btn btn-primary">Select Your seat</a>


        		</div>
        			
        		 <?php
        		}
        		}
        		else {
        			echo "No data found";
        		} 
        		?>
        	</div>
    	</div>
    	<div class="row">
    		<div class="jumbotron">
    			
    		</div>
    	</div>
    </div>
</div>
<?php include_once 'footer.php'; ?>