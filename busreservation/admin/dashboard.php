<?php
	include('../db.php');
    include('../session.php'); 
    $query = "SELECT * from admin where id ='$session_id'";
    $result = $mysqli->query($query) or die("error in session");
    $obj= $result->fetch_object();
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom">
				<a id="logo" href="dashboard.php"></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">
					Hi
					<strong><?php echo $obj->username; ?></strong>
					!
					<br>
					<a class="alightred" href="../logout.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a class="active" href="dashboard.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Dashboard</span>
						</a>
					</li>
					
					<li>
						<a href="route.php">
							<img alt="Statistics" src="img/m-custom.png">
							<span>Bus</span>
						</a>
					</li>
					<li>
						<a href="setinventory.php">
							<img alt="Statistics" src="img/m-statistics.png">
							<span>Seat Inventory</span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> Firstname </th>
								<th> Lastname </th>
								<th> Address </th>
								<th> Contact </th>
								<th> Route </th>
								<th> Bus Type </th>
								<th> Time </th>
								<th> Seat Number </th>
								<th> Payable </th>
								<th> Status </th>
								<th> Action </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../db.php');
							$query1 = "SELECT count(*) FROM customer";
							$result1 = $mysqli->query($query1) or die("error");
							$current_page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
							$per_page = 5;
							$obj1 = $result1->fetch_array(MYSQLI_NUM);
							$total_count = $obj1[0];
							$total_pages = $total_count/$per_page;
							$offset = ($current_page - 1) * $per_page;
							$previous_page = $current_page - 1;
							$next_page = $current_page + 1;
							$has_previous_page =  $previous_page >= 1 ? true : false;
							$has_next_page = $next_page <= $total_pages ? true : false;
							$query1 = "SELECT * FROM customer LIMIT {$per_page} OFFSET {$offset}";
							$result1 = $mysqli->query($query1) or die("error");
							while($obj1 = $result1->fetch_object())
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$obj1->fname.'</td>';
									echo '<td><div align="right">'.$obj1->lname.'</div></td>';
									echo '<td><div align="right">'.$obj1->address.'</div></td>';
									echo '<td><div align="right">'.$obj1->contact.'</div></td>';
									$rrad=$obj1->bus;
									$dddd=$obj1->transactionum;
									// var_dump($rrad);
									$query2 = "SELECT * FROM route WHERE id='$rrad'";
									$result2 = $mysqli->query($query2) or die("error");
									while($obj = $result2->fetch_object()){
										echo '<td><div align="right">'.$obj->route.'</div></td>';
										echo '<td><div align="right">'.$obj->type.'</div></td>';
										echo '<td><div align="right">'.$obj->time.'</div></td>';
									}
									$query3 = "SELECT * FROM reserve WHERE transactionnum='$dddd'";
									// var_dump($query3);
									$result3 = $mysqli->query($query3) or die("error");
									while($obj = $result3->fetch_object()){
										echo '<td><div align="right">'.$obj->seat.'</div></td>';
									}
									
									echo '<td><div align="right">'.$obj1->payable.'</div></td>';
									echo '<td><div align="right">'.$obj1->status.'</div></td>';
									echo '<td><div align="center"><a rel="facebox" href="editstatus.php?id='.$obj1->id.'">edit</a> | <a href="#" id="'.$obj1->transactionum.'" class="delbutton" title="Click To Delete">delete</a></div></td>';
									echo '</tr>';
									
								}
							?> 
						</tbody>
					</table>
					<div class="pagination-list">
						<ul class="pagination">
						<?php if ($total_pages > 1){
							// if ($has_previous_page){
							// 	echo '<li><a href=dashboard.php?page='.$previous_page.'>&laquo;</a></li>';
							// }
							for($i = 1; $i <= $total_pages; $i++){
								if ($i == $current_page){
									echo '<li class="active"><span>'. $i.' <span class="sr-only">(current)</span></span></li>';
								}
								else{
									echo ' <li><a href=dashboard.php?page='.$i.'> '. $i .' </a></li>';
								}
							}
							// if ($has_next_page){
							// 	echo '<li><a href=dashboard.php?page='.$next_page.'>&raquo;</a></li> ';
							// }
						} ?>	

					   
					  </ul>
					</div>
				</div>
				<div id="footer" class="radius-bottom">
					2011-12 ©
					<a class="afooter-link" href="">TurboAdmin 1.1</a>
					by
					<a class="afooter-link" href="">Begie</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteres.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>