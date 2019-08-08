<?php
    include("session.php");

    if(isset($_POST['search']))
  {
    $valueToSearh = $_POST['valueToSearh']; 
    $query = "SELECT * FROM rfc_users WHERE firstname LIKE '%".$valueToSearh."%' OR lastname LIKE '%".$valueToSearh."%' OR middlename LIKE '%".$valueToSearh."' OR status LIKE '%".$valueToSearh."%' OR agent LIKE '%".$valueToSearh."%'";
    $nquery = filterRecord($query);
  }
  else
  {
    $query = "SELECT *FROM rfc_users";
    $nquery = filterRecord($query);
  }
  
  function filterRecord($query)
  {
    include("config.php");
    $filter_result = mysqli_query($mysqli, $query);
    return $filter_result;
  }
    
?>
<?php include('pagination.php'); ?>

<?php

  include('conn.php');
  
  date_default_timezone_set("Asia/Manila");
$date=date('F j, Y g:i:a');

  $uquery=mysqli_query($conn,"SELECT * FROM `login_users` WHERE username='".$_SESSION['user']."'");
  $urow=mysqli_fetch_assoc($uquery);
?>


<!-- Monitoring -->

        <?php
     $host='patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com';
     $username='patsydigital01';
     $password='pAtsy06072018';
     $database_name='patsy_db';


      $con = mysqli_connect($host, $username, $password, $database_name); 

      $sql="SELECT count(id) AS total FROM rfc_users WHERE BotTag='RFC'";
      $result=mysqli_query($con,$sql);
      $values=mysqli_fetch_assoc($result);
      $Total_New=$values['total'];

                              
      ?>



        <?php
     $host='patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com';
     $username='patsydigital01';
     $password='pAtsy06072018';
     $database_name='patsy_db';


      $con = mysqli_connect($host, $username, $password, $database_name); 

      $sql="SELECT count(id) AS total FROM rfc_users WHERE BusinessTag= 'BUSINESS_LOAN'";
      $result=mysqli_query($con,$sql);
      $values=mysqli_fetch_assoc($result);
      $Total_Callback=$values['total'];

                              
      ?>


         <?php
     $host='patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com';
     $username='patsydigital01';
     $password='pAtsy06072018';
     $database_name='patsy_db';


      $con = mysqli_connect($host, $username, $password, $database_name); 

      $sql="SELECT count(id) AS total FROM rfc_users WHERE MultiTag= 'MULTI_PURPOSE_LOAN'";
      $result=mysqli_query($con,$sql);
      $values=mysqli_fetch_assoc($result);
      $Total_InCorrect=$values['total'];

                              
      ?>

           <?php
     $host='patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com';
     $username='patsydigital01';
     $password='pAtsy06072018';
     $database_name='patsy_db';


      $con = mysqli_connect($host, $username, $password, $database_name); 

      $sql="SELECT count(id) AS total FROM rfc_users WHERE FinancingTag= 'FINANCING_LOAN'";
      $result=mysqli_query($con,$sql);
      $values=mysqli_fetch_assoc($result);
      $Total_Meeting=$values['total'];

                              
      ?>


<!-- END Monitoring -->



<!doctype html>
<html class="no-js" lang="ca">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PATSY | RFC</title>
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
                      <!--   <a href="#"><img src="img/logo/logo.png" alt="" /></a> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="header-top-menu">
                        <ul class="nav navbar-nav notika-top-nav">
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top Area -->

    <br>

       <!-- Start Status area -->
    <div class="notika-status-area">
        <center><div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $Total_New; ?></span></h2>
                            <p>Current Bot Subscriber</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $Total_Callback; ?></span></h2>
                            <p>Business Loans Visit</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $Total_InCorrect; ?></span></h2>
                            <p>Multi Loans Visit</p>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                    <div class="wb-traffic-inner notika-shadow sm-res-mg-t-30 tb-res-mg-t-30 dk-res-mg-t-30">
                        <div class="website-traffic-ctn">
                            <h2><span class="counter"><?php echo $Total_Meeting; ?></span></h2>
                            <p>Financing Loans Visit</p>
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
                                        <i class="notika-icon notika-app"></i>
                                    </div>
                                    <div class="breadcomb-ctn">
                                        <br>
                                        <h2>Welcome <?php echo $urow['firstname']; ?>,</h2>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                             <!--    <div class="breadcomb-report">
                                    <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                                </div> -->
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
                            <h2>USER LOGS</h2>
                            
                        </div>
                        <div class="widget-tabs-list">
                            <ul class="nav nav-tabs">
                                <li class="active"><a data-toggle="tab" href="#home">Overall User Transaction</a></li>
                            </ul>
                            <div class="tab-content tab-custom-st">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="tab-ctn">
                                       <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                                <th>MessengerID</th>
                                <th>Profile Link</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Transaction Date</th>
                                <th>Currently Viewing</th>
                    <!--            <th>Agent</th> -->
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($crow = mysqli_fetch_array($nquery)){
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $crow['MessengerId']; ?></td>
                                <td><?php echo $crow['Profile_pic']; ?></td>
                                <td><?php echo $crow['Fname']; ?></td>
                                <td><?php echo $crow['Lname']; ?></td>
                                <td><?php echo $crow['LastActive']; ?></td>
                                <td><?php echo $crow['Tag']; ?></td>
                                
                                <!--  -->
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>


                                    </div>
                                    <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="tab-ctn">
                                         <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <thead>
                            <tr>
                                <th>MessengerID</th>
                                <th>Profile Link</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Transaction Date</th>
                                <th>Viewing</th>
                    <!--            <th>Agent</th> -->
                                <th>Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while($crow = mysqli_fetch_array($nquery)){
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $crow['MessengerId']; ?></td>
                                <td><?php echo $crow['Profile_pic']; ?></td>
                                <td><?php echo $crow['Fname']; ?></td>
                                <td><?php echo $crow['Lname']; ?></td>
                                <td><?php echo $crow['LastActive']; ?></td>
                                <td><?php echo $crow['LastClicked']; ?></td>
                                
                                <!--  -->
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>


                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="tab-ctn">
                                        <p>Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus. Nulla sit amet est. Praesent ac the massa at ligula laoreet iaculis. Vivamus aliquet elit ac nisl. Nulla porta dolor. Cras dapibus. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.</p>
                                        <p class="tab-mg-b-0">In hac habitasse platea dictumst. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Nam eget dui. In ac felis quis tortor malesuadan of pretium. Phasellus consectetuer vestibulum elit. Duis lobortis massa imperdiet quam. Pellentesque commodo eros a enim. Vestibulum ante ipsum primis in faucibus orci the luctus et ultrices posuere cubilia Curae; In ac dui quis mi consectetuer lacinia. Phasellus a est. Pellentesque commodo eros a enim. Cras ultricies mi eu turpis hendrerit of fringilla. Donec mollis hendrerit risus. Vestibulum turpis sem, aliquet eget, lobortis pellentesque, rutrum eu, nisl. Praesent egestas neque eu enim. In hac habitasse plat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End tabs area-->
    <!-- Start Footer area-->
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="footer-copy-right">
                        <p>Copyright © 2019 
. All rights reserved. PATSY.</p>
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