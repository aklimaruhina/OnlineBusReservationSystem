<?php include_once 'header.php'; ?>
<div class="ticket-pick">
    <div class="container" style="border-bottom:2px solid #1abc9c; padding-bottom:30px">
      	<div class="row">
        	<div class="mid-content">
          		<div class="col-lg-10">
          			<div class="row">
            			<div class="col-lg-offset-1">
             				<h3>About Available Bus information</h3>
                            <table class="table hover">
                                <thead>
                                    <tr>
                                        <th>Launch/ship</th>
                                        <th>Dep.time</th>
                                        <th>Arr.time</th>
                                        <th>Departure Date</th>
                                        <th>Arrival Date</th>
                                        <th>Fare Range</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    while($row = mysqli_fetch_assoc($result)){
                                      $id = $row['id'];
                                      $date = $row['dept_date'];
                                      // $_SESSION['id'] = $id;
                                      // $_SESSION['date'] = $row['dept_date'];

                                      // $id = $_SESSION['id'];
                                      // $date = $_SESSION['date'];
                                      
                                      // $dept_date=$row['dept_date'];
                                      ?>


                                    <tr>
                                        <td><?php echo $row['bus_name'].'<br>'.$row['bus_info'].'<br> Route:'.$row['city_from']."-".$row['city_to'] ?></td>
                                        <td><?php echo $row['dtime'] ?></td>
                                        <td><?php echo $row['arrtime'] ?></td>
                                        <td><?php echo $row['dept_date'] ?></td>
                                        <td><?php echo $row['arr_date'] ?></td>
                                        <td><?php echo $row['seat'] ?></td>
                                        <td><?php echo $row['fare'] ?></td>
                                        <td><a href="selectseat.php?id=<?php echo $id."&date=" .urlencode($date)?>">Choose your seat</a></td>
                                    </tr>
                                       
                            <?php
                        }?>
                                </tbody>
                            </table>
             				

         				</div>
         			</div>
         		</div>
         	</div>
        </div>
    </div>
</div>
<?php include_once 'footer.php'; ?>
