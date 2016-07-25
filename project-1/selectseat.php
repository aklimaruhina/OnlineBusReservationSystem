<?php 
include_once 'header.php'; 
include_once 'database/config.php';
$busnum = $_GET['id'];


$query = "SELECT * FROM `bus_reserve` where id =". $busnum;

// $result = $mysqli->query($query);
// $query2 = "INSERT INTO `reserve_list` (`id`, `total_reserve`, `busno`) VALUES (NULL, '$qty', '$busnum')";
// $resul2 = $mysqli->query($query2);
// $query3 = "SELECT SUM(`total_reserve`) as reserve FROM `reserve_list` WHERE `busno`= ".$busnum;

// while($obj= $result->fetch_object()){
//     $numofseats=$obj->seat;
//     $result3 = $mysqli->query($query3);
//     while($objj = $result3->fetch_object()){
//         $inogbuwin = $objj->reserve;
//     }
//     $result3->free();
//     $avail=$numofseats-$inogbuwin;
//     $setnum=$inogbuwin+1;
// }
// $result->free();


?>
<div class="ticket-pick">
    <div class="container" style="border-bottom:2px solid #1abc9c; padding-bottom:30px">
      	<div class="row">
        	<div class="mid-content">
          		<div class="col-lg-6">
          			<div class="row">
            			<div class="col-lg-offset-1">
            				<form action="reserve.php?id=<?php echo $busnum;?>" method="post">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >
                                </div>
            					<div class="form-group">
            						<label>Select Number of passenger: </label>
            						    <select class="form-control" name="qty">
            						    	<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
            						    </select>

            					</div>
            					<div class="col-lg-12" style="padding-top: 15px;">
                  					<button type="submit" name="search_btn" style="background:#1abc9c" class="form-control"><span class="glyphicon glyphicon-search"></span>Search Buses</button>
                				</div>
            				</form>
            			</div>
            		</div>
            	</div>
                
            </div>
        </div>
    </div>
</div>
<?php 

include_once 'footer.php'; ?>