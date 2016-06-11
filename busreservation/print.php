<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=400, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Inel Power System</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 400px; font-size:12px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
Print and present this details upon boarding the bus<br><br>
<a href="javascript:Clickheretoprint()">Print</a>
<div id="print_content" style="width: 400px;">
<strong>Ticket Reservation Details</strong><br><br>
<?php
include('db.php');
$id=$_GET['id'];
$setnum=$_GET['setnum'];
$query = "SELECT * FROM customer WHERE transactionum='$id'";
$result = $mysqli->query($query);
while($obj = $result->fetch_object())
	{
		echo 'Transaction Number: '.$obj->transactionum.'<br>';
		echo 'Name: '.$obj->fname.' '.$obj->lname.'<br>';
		echo 'Address: '.$obj->address.'<br>';
		echo 'Contact: '.$obj->contact.'<br>';
		echo 'Payable: '.$obj->payable.'<br>';
	}
$query1= "SELECT * FROM reserve WHERE transactionnum='$id'";

$results = $mysqli->query($query1);
while($rows = $results->fetch_object())
	{
		$ggagaga=$rows->bus;
		
		echo 'Route and Type of Bus: ';
		$query2 = "SELECT * FROM route WHERE id='$ggagaga'";
		
		$resulta = $mysqli->query($query2);
		while($rowa = $resulta->fetch_object())
			{
			echo $rowa->route.'     :'.$rowa->type;
			$time=$rowa->time;
			}
		echo 'Time of Departure: '.$time;
		echo '<br>';
		echo 'Seat Number: '.$setnum.'<br>';
		echo 'Date Of Travel: '.$rows->date.'<br>';
		
	}
?>
</div>
<a href="index.php">Home</a>