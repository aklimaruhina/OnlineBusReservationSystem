<?php
include('database/config.php');
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
$busnum=$_GET['id'];
$firstname=$_POST['firstname'];
$qty=$_POST['qty'];
$avail = $_POST['avail'];
$lastname=$_POST['lastname'];

$setnum=$_POST['setnum'];

$contact=$_POST['contact'];
$address=$_POST['address'];
$query = "SELECT * FROM `bus_reserve` WHERE id=".$busnum;

$result = $mysqli->query($query);

while($obj= $result->fetch_object())
	{
	$price=$obj->fare;
	}
	$payable=$qty*$price;

$query1 = "INSERT INTO reserve_section (id, firstname, lastname, contact, address, setnum, transaction_code, payable, busno,seat)
VALUES (NULL, '$firstname', '$lastname', '$contact', '$address', '$setnum', '$confirmation','$payable','$busnum',$avail)";
$result1 = $mysqli->query($query1);
$query2 = "INSERT INTO `reserve_list` (`id`, `total_reserve`, `busno`,`transaction_code`,`setnum`) VALUES (NULL, '$qty', '$busnum','$confirmation','$setnum')";

// $query2 = "INSERT INTO reserve (bus, seat_reserve, transactionnum, seat)
// VALUES ('$date', '$busnum', '$qty', '$confirmation','$setnum')";
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