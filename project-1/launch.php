<?php 
include_once 'database/config.php';
include_once 'header.php'; ?>
<div class="nav-tabs">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
           <ul class="nav nav-tabs">
              <li role="presentation" class="active"><a href="#">Print/SMS Ticket</a></li>
              <li role="presentation"><a href="#">Cancel Ticket</a></li>
              <li role="presentation"><a href="#">Refund Status</a></li>
              <li class="nav-menu navbar-right"><a href="#" data-target="#login_modal" data-toggle="modal">Admin Login</a></li>
            </ul>
        </div>
      </div>
    </div>
  </div>


  <div class="ticket-pick">
    <div class="container" style="border-bottom:2px solid #1abc9c; padding-bottom:30px">
      <div class="row">
        <div class="mid-content">
          <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-offset-1">
             <h3>Lowest prices guaranteed on Bus Tickets </h3>
              <div class="pick-form">
                  <form method="post" action="searchlaunch.php">
                    <div class="form-group">
                      <label>From:</label>
                      <select class="form-control" name="city_from">

                                <option>----Select city----</option>
                                <?php 
                                $query = "SELECT * FROM `route_one`";
                                $result = $mysqli->query($query); 
                                while($obj= $result->fetch_object()) {
                                  if (!$result) {
                                    die("Error: Data not Found. . ");
                                  }
                                  echo "<option value=".$obj->route_from.">".$obj->route_from."</option>"; 
                                }
                                $result->close();
                                 ?>
                              </select>
                    </div>
                    <div class="form-group">
                      <label>To:</label>
                      <select class="form-control" name="city_to">

                                <option>----Select city----</option>
                                <?php 
                                $query = "SELECT * FROM `route_one`";
                                $result = $mysqli->query($query); 
                                while($obj= $result->fetch_object()) {
                                  if (!$result) {
                                    die("Error: Data not Found. . ");
                                  }
                                  echo "<option value=".$obj->route_to.">".$obj->route_to."</option>"; 
                                }
                                $result->close();
                                 ?>
                              </select>
                    </div>
              <div class="row">
                <div class="col-lg-6">
                   <div class="form-group">
                      <label>Date Of journey:</label>
                      <div class="input-group date" id="date1">
                        <input type="date" class="form-control" name="dept_date" data-format="yyyy-MM-dd">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span></span>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                      <label>Date Of return(Optional):</label>
                      <div class="input-group date" id="date2">
                        <input type="date" class="form-control" name="arr_date">
                        <span class="input-group-addon">
                          <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                      </div>
                    </div>
                </div>
                <div class="col-lg-12" style="padding-top: 15px;">
                  <button type="submit" name="search_btn" style="background:#1abc9c" class="form-control"><span class="glyphicon glyphicon-search"></span>Search Buses</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
        <div class="col-lg-6">
          <div class="ad-section text-center">
            <div class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                  <img src="../img/ad 1.gif" alt="img 1" class="img-responsive text-center">
                </div>
                <div class="item">
                  <img src="../img/ad 2.jpg" alt="Img 2" class="img-responsive text-center">
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
       </div>
    </div>
  </div>


  <div class="why-buy">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
         <div class="row">
          <div class="col-lg-offset-2">
             <div class="first-whybuy">
            <h4 class="text-green">Why Buy ticket from us?</h4>
            <ul>
              <li><p class="text-default"><b>Buy bus tickets</b> anytime from anywhere</p></li>
              <li><p class="text-default">Pay by credit card, mobile banking or cash</p></li>
              <li><p class="text-default">Get tickets delivered to your doorstep</p></li>
              <li><p class="text-default">Dependable customer service 24 hours a day</p></li>
            </ul>
          </div>
          </div>
         </div>
        </div>
        <div class="col-lg-6">
          <div class="scnd-whybuy">
            <h4 class="text-green">Customer Testimonials</h4>
            <div class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="item active">
                 <div class="media">
                  <div class="media-left">
                    <a href="#">
                     <img class="media-object thumbnail" src="img/cus1.png" alt="customer 1">
                    </a>
                  </div>
                  <div class="media-body">
                    <p>Unlike others, bus journey is not only journey to me, it's a matter of enjoyment. I had to strive a lot to get my desired seat in addition to the suffering due to the hours of traffic jam and long queue. Shohoz.com has made everything easy for me. </p><br>
                    <p><a href="" class="text-green">-Riad Ali, </a>Dhaka.</p>
                  </div>
                 </div>
                </div>
                <div class="item">
                   <div class="media">
                  <div class="media-left">
                    <a href="#">
                     <img class="media-object thumbnail" src="img/cus2.png" alt="customer 2">
                    </a>
                  </div>
                  <div class="media-body">
                    <p>Booking bus tickets was a pain. I used to spend almost half the ticket price as CNG fare while going to the counters to get my ticket. Thank you Shohoz for saving my extra expenditure. </p><br>
                    <p><a href="" class="text-green">-Nusrat, </a>Dhaka.</p>
                  </div>
                 </div>
                </div>
                <div class="item">
                   <div class="media">
                  <div class="media-left">
                    <a href="#">
                     <img class="media-object thumbnail" src="img/cus3.png" alt="customer 3">
                    </a>
                  </div>
                  <div class="media-body">
                    <p>It's just amaging system of ticket booking. I just love this system. Thank you Shohoz for saving my extra expenditure. </p><br>
                    <p><a href="" class="text-green">-Israt, </a>Dhaka.</p>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="bus-operator">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h4>Available Bus Operators</h4>
        </div>
        <div class="col-lg-6">
          <h4 class="text-green"><b>Refer and Earn Shohoz-e</b></h4>
        </div>
        <div class="row">
          <div class="col-lg-12">
        <hr style="border-color:black">
      </div>
        </div>
        <div class="row">
          <div class="col-lg-6 operator">
           <div class="row">
            <div class="col-lg-4">
               <ul>
          <li>A.R Travels</li>
          <li>Ena Transport (Pvt)</li>
          <li>HIMACHOL EXPRESS</li>
          <li>Relax Transport Ltd.</li>
          <li>S.R Travels (Pvt)</li>
          <li>Sakal Sandhya Ent..</li>
          <li>Shyamoli Paribahan</li>
          <li>Tisha Group</li>
        </ul>
            </div>
            <div class="col-lg-4">
              <ul>
                <li>Agomony Express</li>
                <li>Green Line Paribahan</li>
               <li>Manik Express</li>
               <li>S A Travels (Pvt)</li>
               <li>Saintmartin Paribahan</li>
               <li>Sheba Green Line</li>
               <li>Soudia Air Con</li>
               <li>TR Travels</li>
              </ul>
            </div>
            <div class="col-lg-4">
              <ul>
                <li>Akota Transport</li>
          <li>Hanif Enterprise</li>
          <li>Nabil Paribahan</li>
          <li>S.B Super Deluxe</li>
          <li>Saintmartin Travels</li>
          <li>Shohagh Paribahan</li>
          <li>Star Line Special</li>
          <li>Tungipara Express</li>
              </ul>
            </div>
           </div>
          </div>
          <div class="col-lg-6">
            <div class="works-section">
              <h4 class="text-green">How does it work?</h4>
              <ul class="text-green">
                <li><p class="text-default"><b>Login with Facebook</b> and refer your friends</p></li>
                <li><p class="text-default">When your friends buy tickets from Shohoz.com, you get Tk. 50 talktime</p></li>
                <li><p class="text-default">Your friends also get Tk. 200 off on their first purchase</p></li>
                <li style="list-style-type:none"><a href=""><img src="img/fb_connect.gif"></a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="routes">
                <h4>Available Bus Routes</h4>
                <hr style="border-color:black">
                <div class="available-route">
                  <div class="row">
                    <div class="col-lg-2">
                      <ul>
                        <li>Dhaka - Dinajpur</li>
                        <li>Dhaka - Cox's Bazar</li>
                        <li>Dhaka - Bogra</li>
                        <li>Dhaka - Khulna</li>
                        <li>Dhaka - Moulvibazar</li>
                        <li>Dhaka - Jessore</li>
                        <li>Dhaka - Tangail</li>
                      </ul>
                    </div>
                    <div class="col-lg-2">
                      <ul>
                        <li>Dhaka - Panchagor</li>
                        <li>Dhaka - Feni</li>
                        <li>Dhaka - Noagaon</li>
                        <li>Dhaka - Sylhet</li>
                        <li>Dhaka - Sreemangal</li>
                        <li>Dhaka - Pabna</li>
                      </ul>
                    </div>
                    <div class="col-lg-2">
                      <ul>
                        <li>Dhaka - Nilphamari</li>
                      <li>Dhaka - Tangail</li>
                      <li>Dhaka - Chapai Nawabganj</li>
                      <li>Dhaka - Barisal</li>
                      <li>Dhaka - Rangamati</li>
                      <li>Dhaka - Kushtia</li>
                      </ul>
                    </div>
                    <div class="col-lg-2">
                      <ul>
                        <li>Dhaka - Kurigram</li>
                      <li>Dhaka - Darshana</li>
                      <li>Dhaka - Gopalganj</li>
                      <li>Dhaka - Bandarban</li>
                      <li>Dhaka - Kolkata</li>
                      <li>Dhaka - Gaibandha</li>
                      </ul>
                    </div>
                    <div class="col-lg-2">
                     <ul>
                       <li>Dhaka - Rangpur</li>
                      <li>Dhaka - Joypurhat</li>
                      <li>Dhaka - Hili</li>
                      <li>Dhaka - Teknaf</li>
                      <li>Dhaka - Rajshahi</li>
                      <li>Dhaka - Jhenaidah</li>
                     </ul>
                    </div>
                    <div class="col-lg-2">
                      <ul>
                        <li>Dhaka - Thakurgaon</li>
                      <li>Dhaka - Satkhira</li>
                      <li>Dhaka - Chittagong</li>
                      <li>Dhaka - Khagrachari</li>
                      <li>Dhaka - Nazir Hat</li>
                      <li>Dhaka - Brahmanbaria</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="login_modal">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h4>Admin Login</h4>
      </div>
      <div class="modal-body">
        <form action="login.php" method="post">
          <div class="form-group">
            <label>User Name: </label>
              <input type="text" name="uname" class="form-control" placeholder="Enter User Name" />
            <label  style="padding-top:10px;">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Enter Password" />
            <label style="padding-top:5px;">
              <input type="checkbox" />&nbsp;Remember me
            </label>
          </div>
          <div class="form-group">
            <button type="submit" class="form-control" style="background:#1abc9c; padding-bottom:10px" name="login">Admin login</button>
           
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  <?php include_once 'footer.php'; ?>
  <script type="text/javascript">
          $(document).ready(function(){
             $('#date1').datetimepicker({
                 format: 'DD/MM/YYYY'
              });
             $('#date2').datetimepicker({
                 format: 'DD/MM/YYYY'
              });
             
          });
                     
        </script>