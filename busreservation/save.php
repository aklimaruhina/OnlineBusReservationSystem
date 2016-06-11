<?php
include('db.php');
function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
$confirmation = createRandomPassword();
$fname=$_POST['fname'];
$qty=$_POST['qty'];
$lname=$_POST['lname'];
$busnum=$_POST['busnum'];
$setnum=$_POST['setnum'];
$date=$_POST['date'];
$contact=$_POST['contact'];
$address=$_POST['address'];
$query = "SELECT * FROM route WHERE id=".$busnum;

$result = $mysqli->query($query);

while($obj= $result->fetch_object())
	{
	$price=$obj->price;
	}
	$payable=$qty*$price;

$query1 = "INSERT INTO customer (fname, lname, address, contact, bus, transactionum, payable, setnumber)
VALUES ('$fname', '$lname', '$address', '$contact', '$busnum', '$confirmation','$payable','$setnum')";
$result1 = $mysqli->query($query1);
$query2 = "INSERT INTO reserve (date, bus, seat_reserve, transactionnum, seat)
VALUES ('$date', '$busnum', '$qty', '$confirmation','$setnum')";
$result2 = $mysqli->query($query2);
if($result1 && $result2){
	echo "successfull";
header("location: print.php?id=$confirmation&setnum=$setnum");
exit();
}
else{
	echo "error";
}
?>