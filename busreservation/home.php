

    <?php 
    include('db.php');
    include('session.php'); 
    $query = "SELECT * from admin where id ='$session_id'";
    $result = $mysqli->query($query) or die("error in session");
    $obj= $result->fetch_object();
     
     ?>
     
    <html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    <div class="form-wrapper"> 
        <center><h3>Welcome: <?php echo $obj->username; ?> </h3></center>
    	 <div class="reminder">
        <p><a href="logout.php">Log out</a></p>
      </div>
    </div>
     
    </body>
    </html>