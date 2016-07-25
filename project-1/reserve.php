<?php include_once 'header.php'; 
include_once 'database/config.php';
$busno = $_GET['id'];
if($_POST):

$qty =  $_POST['qty'];

$query = "SELECT * FROM `bus_reserve` where id =". $busno;
// $query2 = "INSERT INTO `reserve_list` (`id`, `total_reserve`, `busno`) VALUES (NULL, '$qty', '$busnum')";

$query2 = "SELECT SUM(`total_reserve`) as reserve FROM `reserve_list` WHERE `busno`= ".$busno;
$result = $mysqli->query($query) or trigger_error($mysqli->error."[$query]");
while($obj= $result->fetch_object()){
	$numofseats=$obj->seat;
	$result2 = $mysqli->query($query2) or trigger_error($mysqli->error."[$query2]");
	while($objj = $result2->fetch_object()){
		$inogbuwin = $objj->reserve;
	}
	$result2->free();
    $avail=$numofseats-$inogbuwin;
    $setnum=$inogbuwin+1;

}
$result->free();
endif;
if ($avail < $qty){
echo 'Qty reserve exced the available seat of the bus';
}
else if($avail > 0)
{

?>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form"]["firstname"].value;
if (x==null || x=="")
  {
  alert("First Name must be filled out");
  return false;
  }
var y=document.forms["form"]["lastname"].value;
if (y==null || y=="")
  {
  alert("Last Name must be filled out");
  return false;
  }
var a=document.forms["form"]["address"].value;
if (a==null || a=="")
  {
  alert("Address must be filled out");
  return false;
  }
var b=document.forms["form"]["contact"].value;
if (b==null || b=="")
  {
  alert("Contact Number must be filled out");
  return false;
  }

}
</script>
<div class="ticket-pick">
    <div class="container" style="border-bottom:2px solid #1abc9c; padding-bottom:30px">
      	<div class="row">
        	<div class="mid-content">
          		<div class="col-lg-6">
          			<div class="row">
             			<h3>Please Enter Your Informaion</h3>
              			<div class="pick-form">
                  			<form method="post" action="savebus.php?id=<?php echo $busno;?>" class="form-horizontal" onsubmit="return validateForm()">
                 				<div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $busno; ?>" >
                                </div>
                 				<input type="hidden" value="<?php echo $qty ?>" name="qty" />
                 				<div class="form-group">
                      				<label for="firstname" class="col-sm-4 control-label">First Name</label>
                      				<div class="col-sm-8">
          							    <input type="text" class="form-control" name="firstname" placeholder="Enter Your first Name">
          							</div>
                      			</div>
                      			<div class="form-group">
                      				<label for="lastname" class="col-sm-4 control-label">Last Name</label>
                      				<div class="col-sm-8">
          							    <input type="text" class="form-control" name="lastname" placeholder="Enter your last Name">
          							</div>
                      			</div>
                      			<div class="form-group">
                      				<label for="contact" class="col-sm-4 control-label">Contact</label>
                      				<div class="col-sm-8">
                      					<input type="text" class="form-control" name="contact" placeholder="Enter Your phone number">
                      				</div>
                      			</div>
                      			<div class="form-group">
		                            <label for="address" class="col-sm-4 control-label">Enter Your Address</label>
		                            <div class="col-sm-8">
		                                <textarea class="form-control" rows="2" name="address"></textarea>
		                            </div>
                        		</div>
                        		<div class="form-group">
                        			<label for="" class="col-sm-4 control-label">Seat Number: </label>
                        			<div class="col-sm-8">
                        				<input type="text" name="setnum" value="<?php
                              $N = $qty;
                              for($i=0; $i < $N; $i++)
                              {
                              echo $i+$setnum.', ';
                              } 
                               ?>" class="form-control" >
                                				
                        			</div>
                        		</div>
                        		<div class="col-lg-5 col-md-offset-5 pull-right" style="padding-top: 15px;">
                 					<button type="submit" style="background:#1abc9c" class="form-control"><span class="glyphicon glyphicon-plus"></span>Added Buses</button>
                				</div>

            				</form>
        				</div>
        				<?php
						}
						else
						{
						echo 'no available seats';
						}
						$mysqli->close();
						?>
        			</div>
      			</div>
        	</div>
       	</div>
    </div>
</div>

<?php include_once 'footer.php'; ?>