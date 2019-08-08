

<?php
  include("session.php");

  if(isset($_POST['search']))
  {
    $valueToSearh = $_POST['valueToSearh']; 
    $query = "SELECT * FROM lead_users_unicare WHERE firstname LIKE '%".$valueToSearh."%' OR lastname LIKE '%".$valueToSearh."%' OR middlename LIKE '%".$valueToSearh."' OR status LIKE '%".$valueToSearh."%' OR agent LIKE '%".$valueToSearh."%'";
    $nquery = filterRecord($query);
  }
  else
  {
    $query = "SELECT *FROM lead_users_unicare";
    $nquery = filterRecord($query);
  }
  
  function filterRecord($query)
  {
    include("config.php");
    $filter_result = mysqli_query($mysqli, $query);
    return $filter_result;
  }
  
?>


<?php

  include('conn.php');
  
  date_default_timezone_set("Asia/Manila");
$date=date('F j, Y g:i:a');

  $uquery=mysqli_query($conn,"SELECT * FROM `users` WHERE username='".$_SESSION['user']."'");
  $urow=mysqli_fetch_assoc($uquery);
?>

<?php
$conn = new mysqli("patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com","patsydigital01","pAtsy06072018","ops_db");
$count=0;
if(!empty($_POST['add'])) {
  $subject = mysqli_real_escape_string($conn,$_POST["subject"]);
  $comment = mysqli_real_escape_string($conn,$_POST["comment"]);
  $sql = "INSERT INTO comments (subject,comment) VALUES('" . $subject . "','" . $comment . "')";
  mysqli_query($conn, $sql);
}
$sql2="SELECT * FROM comments WHERE status = 0";
$result=mysqli_query($conn, $sql2);
$count=mysqli_num_rows($result);
?>

<?php include('pagination-1.php'); ?>




<!-- Monitoring -->

        <?php
     $host='patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com';
     $username='patsydigital01';
     $password='pAtsy06072018';
     $database_name='test_system';


     


      $con = mysqli_connect($host, $username, $password, $database_name); 

      $sql="SELECT count(id) AS total FROM lead_users_unicare WHERE status='New_Leads'";
      $result=mysqli_query($con,$sql);
      $values=mysqli_fetch_assoc($result);
      $Total_New=$values['total'];

                              
      ?>



        <?php
     $host='patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com';
     $username='patsydigital01';
     $password='pAtsy06072018';
     $database_name='test_system';


      $con = mysqli_connect($host, $username, $password, $database_name); 

      $sql="SELECT count(id) AS total FROM lead_users_unicare WHERE status='Callback'";
      $result=mysqli_query($con,$sql);
      $values=mysqli_fetch_assoc($result);
      $Total_Callback=$values['total'];

                              
      ?>


         <?php
     $host='patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com';
     $username='patsydigital01';
     $password='pAtsy06072018';
     $database_name='test_system';


      $con = mysqli_connect($host, $username, $password, $database_name); 

      $sql="SELECT count(id) AS total FROM lead_users_unicare WHERE status='In-Correct'";
      $result=mysqli_query($con,$sql);
      $values=mysqli_fetch_assoc($result);
      $Total_InCorrect=$values['total'];

                              
      ?>

           <?php
     $host='patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com';
     $username='patsydigital01';
     $password='pAtsy06072018';
     $database_name='test_system';


      $con = mysqli_connect($host, $username, $password, $database_name); 

      $sql="SELECT count(id) AS total FROM lead_users_unicare WHERE status='Set_Meeting'";
      $result=mysqli_query($con,$sql);
      $values=mysqli_fetch_assoc($result);
      $Total_Meeting=$values['total'];

                              
      ?>


<!-- END Monitoring -->


<?php
$conn = new mysqli("patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com","patsydigital01","pAtsy06072018","ops_db");
$count=0;
if(!empty($_POST['add'])) {
  $subject = mysqli_real_escape_string($conn,$_POST["subject"]);
  $comment = mysqli_real_escape_string($conn,$_POST["comment"]);
  $sql = "INSERT INTO comments (subject,comment) VALUES('" . $subject . "','" . $comment . "')";
  mysqli_query($conn, $sql);
}
$sql2="SELECT * FROM comments WHERE status = 0";
$result=mysqli_query($conn, $sql2);
$count=mysqli_num_rows($result);
?>



<!doctype html>
<html class="no-js" lang="ca">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HOME | AIRCAST | TELEMARKETING</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- font awesome CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- meanmenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu/meanmenu.min.css">
    <!-- Notika icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/notika-custom-icon.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
	<!-- wave CSS
		============================================ -->
    <link rel="stylesheet" href="css/wave/waves.min.css">
    <link rel="stylesheet" href="css/wave/button.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>


    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script type="text/javascript">

    function myFunction() {
        $.ajax({
            url: "view_notification.php",
            type: "POST",
            processData:false,
            success: function(data){
                $("#notification-count").remove();                  
                $("#notification-latest").show();$("#notification-latest").html(data);
            },
            error: function(){}           
        });
     }
     
     $(document).ready(function() {
        $('body').click(function(e){
            if ( e.target.id != 'notification-icon'){
                $("#notification-latest").hide();
            }
        });
    });
         
    </script>

          <script>

function pad(val) {
  valString = val + "";
  if(valString.length < 2) {
     return "0" + valString;
     } else {
     return valString;
     }
}

totalSeconds = 0;
function setTime(minutesLabel, secondsLabel) {
    totalSeconds++;
    secondsLabel.innerHTML = pad(totalSeconds%60);
    minutesLabel.innerHTML = pad(parseInt(totalSeconds/60));
    }

function set_timer() {
    minutesLabel = document.getElementById("minutes");
    secondsLabel = document.getElementById("seconds");
    my_int = setInterval(function() { setTime(minutesLabel, secondsLabel)}, 1000);
}

function stop_timer() {
  clearInterval(my_int);
}


</script>

<script type="text/javascript">
  
window.onload = function(){
  document.getElementById("autoid").click();
}

</script>


</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Start Header Top Area -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="logo-area">
                       <!--  <a href="#"><img src="img/logo/logo.png" alt="" /></a> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">  

                        <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle" id="notification-icon" name="button" onclick="myFunction()" ><span id="notification-count"><i class="notika-icon notika-alarm"></i><?php if($count>0) { echo $count; } ?></span></a>
                                <div role="menu" class="dropdown-menu message-dd animated zoomIn">
                                    <div class="hd-mg-tt">
                                        <h2>Notifications</h2>
                                    </div>
                                    <div class="hd-message-info">
                                            <div class="hd-message-sn">
                                               <div id="notification-latest"></div>
                                            </div>
                                    </div>
                                </div>
                            </li>   

                            <li class="nav-item dropdown">
                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle" id="notification-icon" name="button" onclick="myFunction()" ></a>
                            </li>             
                        </ul>
                        <?php if(isset($message)) { ?> <div class="error"><?php echo $message; ?></div> <?php } ?>


  <?php if(isset($success)) { ?> <div class="success"><?php echo $success;?></div> <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->
    <?php
    while($crow = mysqli_fetch_array($nquery)){
    ?>

    <br>
      <!-- Start Status area -->
    <div class="notika-status-area">
        <center><div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $Total_New; ?></span></h2>
                            <p>Total New Opportunity</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $Total_Callback; ?></span></h2>
                            <p>Total Callback</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $Total_InCorrect; ?></span></h2>
                            <p>Total In-Correct</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $Total_Meeting; ?></span></h2>
                            <p>Total Set Meeting</p>
                        </div>
                    </div>
                </div>
            </div>
        </div></center>
    </div>
    <!-- End Status area-->
    <br>
	<!-- Breadcomb area Start-->
	<div class="breadcomb-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcomb-list">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								<div class="breadcomb-wp">
									<div class="breadcomb-icon">
										<i class="notika-icon notika-support"></i>
									</div>
									<div class="breadcomb-ctn">
                                        <br>
										<h2>Welcome <?php echo $urow['firstname']; ?>,</h2>
									</div>




								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-3" style="float:right;">
                                <br>
								 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-default btn-icon-notika" onclick='set_timer()'  id="autoid"><i class="notika-icon notika-phone"></i> RESUME CALL</button style="float:right;">&nbsp;&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-default btn-icon-notika" onclick='stop_timer()' ><i class="notika-icon notika-phone"></i> PAUSE CALL</button style="float:right;"> 
                                 
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcomb area End-->
    <!-- Start tabs area-->
    <div class="tabs-info-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget-tabs-int">
                        <div class="tab-hd">
                            <h2></h2>
                             <form action="update_lead.php" method="POST">
<?php
  $nquery = mysqli_query($mysqli,"SELECT * FROM lead_users_unicare WHERE firstname ='$id'");
  // $nquery = "UPDATE lead_users_unicare SET visits = visits+1 WHERE firstname ='$id'";
  // while($crow = mysqli_fetch_array($nquery))
  // {  
             
  echo"<input type='hidden' name='id' value='{$crow['firstname']}' required>";

  echo"<input type='hidden' name='agent_name' value='{$urow['firstname']}' required>";

 
  echo"<div class='row'><div class='col-sm-2'><label>CONTACT #</label>
        <input type='text' name='lastname' value='{$crow['lastname']}' class='form-control' readonly></div>";

  echo"<div class='col-sm-4'><label>COMPANY NAME</label>
        <input type='text' name='firstname' value='{$crow['firstname']}' class='form-control' readonly></div>";

  echo"<div class='col-sm-4'><label>CONTACT PERSON</label>
  <input type='text' name='middlename' value='{$crow['middlename']}' class='form-control' readonly></div>";

  echo"<div class='col-sm-2'><label>AHT</label><br>
  <textarea id='minutes' name='aht_minutes' style='width: 30px; height: 25px; overflow:hidden; resize:none; font-size: 20px; border:none;' readonly=''>00</textarea><textarea2 style='width: 1px; height: 20px; overflow:hidden; resize:none; font-size: 20px; border:none;'  readonly=''>:</textare2><textarea id='seconds' name='aht_seconds' style='width: 30px; height: 25px; overflow:hidden; resize:none; font-size: 20px; border:none;'  readonly=''>00</textarea></div></div>";


    echo"<hr><div class='row'><div class='col-sm-4'><label>COMPANY LOCATION</label><input type='text' name='c_location' value='{$crow['c_location']}' class='form-control' readonly></div>";
    
    echo"<div class='col-sm-2'><label>STATUS</label><select tabindex='5' name='status' class='form-control'><option value='{$crow['status']}'>{$crow['status']}</option><option value='Set_Meeting'>Set_Meeting</option><option value='Callback'>Callback</option><option value='In-Correct'>In-Correct</option>
      </select></div>";

    echo"<div class='col-sm-4'><label>REMARKS</label>
        <input type='text' name='remarks' value='' class='form-control' readonly> </div>";
                  
    echo"<div class='col-sm-2'><label>NEXT CALL</label>
    <center><button type='submit' class='btn btn-default btn-icon-notika' id='autoid'><i class='notika-icon notika-right-arrow'></i> NEXT</button style='center'></center></div></div>";     
  

// }
?>
</form>
                        </div>
                        <div class="widget-tabs-list">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">SALES SCRIPT</a></li>
                                <li><a data-toggle="tab" href="#menu1">SEND PROPOSAL</a></li>
                            </ul>
                            <div class="tab-content tab-custom-st">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="tab-ctn">
                                    
                                        <?php 

                                        echo"Good day! I'm looking for <b>{$crow['middlename']}</b> This is {$urow['firstname']}, Business Development from AIRCAST. We are advertising company specializing in LED billboard solutions.                         ";

                                        ?>

                                        <br>
                                        <br>
                                        <p class="tab-mg-b-0">
                                         <?php 

                                          echo"Am i talking to <b>{$crow['middlename']}</b> now? Great! The reason for our call today is we found that your place is good to put an advertising tv which is the AIRCAST."

                                         ?>
                                         
                                        </p>
                                        <br>
                                        <p class="tab-mg-b-0">
                                        <?php  
                                        
                                        ?>  
                                        </p>
                                        <br>
                                        <p class="tab-mg-b-0">
                                        <?php 
                                     
                                        ?>
                                        </p>
                                        <br>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="tab-ctn">
                                       <form method="POST" action="register.php">
                                       <?php                  
                                        echo"<input type='hidden' name='id' value='{$crow['firstname']}' required>"; 

                                        echo"<div class='form-group'>
                                          <label>Company Name</label>
                                          <input type='text' value='{$crow['firstname']}' name='firstname'  class='form-control' required='required' readonly>
                                        </div>";
                                        echo"<div class='form-group'>
                                          <label>Contact Person</label>
                                          <input type='text' name='middlename'  value='{$crow['middlename']}'  class='form-control' required='required' readonly>
                                        </div>";
                                        echo"<div class='form-group'>
                                          <label>Email Address</label>
                                          <input type='email' name='email' class='form-control' required='required'/>
                                        </div>";

                                        echo"<div class='form-group'>
                                          <button name='register' class='btn btn-primary btn-block'>Send Invite</button>
                                        </div>";

                                        ?>
                                        <?php
                                          if(ISSET($_SESSION['status'])){
                                            if($_SESSION['status'] == "error"){
                                        ?>
                                              <div class="alert alert-danger"><?php echo $_SESSION['result']?></div>
                                              
                                        <?php
                                            }
                                  
                                            unset($_SESSION['result']);
                                            unset($_SESSION['status']);
                                          } 
                                        ?>
                                      </form>
                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <?php } ?>  
    <!-- End tabs area-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2018 
. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer area-->
    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/meanmenu/jquery.meanmenu.js"></script>
    <!-- counterup JS
		============================================ -->
    <script src="js/counterup/jquery.counterup.min.js"></script>
    <script src="js/counterup/waypoints.min.js"></script>
    <script src="js/counterup/counterup-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/sparkline-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="js/knob/jquery.knob.js"></script>
    <script src="js/knob/jquery.appear.js"></script>
    <script src="js/knob/knob-active.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- flot JS
		============================================ -->
    <script src="js/flot/flot-widget-anatic-active.js"></script>
    <script src="js/flot/chart-tooltips.js"></script>
    <script src="js/flot/flot-active.js"></script>
	<!--  wave JS
		============================================ -->
    <script src="js/wave/waves.min.js"></script>
    <script src="js/wave/wave-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
	<!-- tawk chat JS
		============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>