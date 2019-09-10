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

      $sql="SELECT count(register_date) AS total FROM rfc_apply WHERE 1";
      $result=mysqli_query($con,$sql);
      $values=mysqli_fetch_assoc($result);
      $Total_Applicant=$values['total'];

                              
      ?>


         <?php
     $host='patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com';
     $username='patsydigital01';
     $password='pAtsy06072018';
     $database_name='patsy_db';


      $con = mysqli_connect($host, $username, $password, $database_name); 

      $sql="SELECT count(apply_now) AS total FROM rfc_apply WHERE 1";
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


<!-- PAGINATION - BETA -->



<?php
include_once("conn.php");
$showRecordPerPage = 5;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
$totalEmpSQL = "SELECT * FROM rfc_apply";
$allEmpResult = mysqli_query($conn, $totalEmpSQL);
$totalEmployee = mysqli_num_rows($allEmpResult);
$lastPage = ceil($totalEmployee/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
$empSQL = "SELECT *
FROM `rfc_apply` LIMIT $startFrom, $showRecordPerPage";
$empResult = mysqli_query($conn, $empSQL);
?> 






<!-- --> 



<!doctype html>
<html class="no-js" lang="ca">
<style>
	.zmdi {
		display: inline-block;
		font-size: 1.35rem;
		margin-right: 5px;
		min-width: 25px;
            }
        }

        .card-list {
            @include clear();
            width: 100%;
        }

        .card {
            border-radius: 8px;
            color: white;
            padding: 10px;
            position: relative;

            .zmdi {
                color: white;
                font-size: 28px;
                opacity: 0.3;
                position: absolute;
                right: 13px;
                top: 13px;
            }
            
            .stat {
                border-top: 1px solid rgba(255, 255, 255, 0.3);
                font-size: 8px;
                margin-top: 25px;
                padding: 10px 10px 0;
                text-transform: uppercase;
            }
</style>

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
                        <a href="#"><img src="img/logo/logo.png" alt="" /></a>
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

	<main role="main" class="col-md-9 ml-sm-auto col-lg-10 my-3">
			<div class="card-list">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card blue">
							<div class="title">all projects</div>
							<i class="zmdi zmdi-upload"></i>
							<div class="value">89</div>
							<div class="stat"><b>13</b>% increase</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card green">
							<div class="title">team members</div>
							<i class="zmdi zmdi-upload"></i>
							<div class="value">5,990</div>
							<div class="stat"><b>4</b>% increase</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card orange">
							<div class="title">total budget</div>
							<i class="zmdi zmdi-download"></i>
							<div class="value">$80,990</div>
							<div class="stat"><b>13</b>% decrease</div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card red">
							<div class="title">new customers</div>
							<i class="zmdi zmdi-download"></i>
							<div class="value">3</div>
							<div class="stat"><b>13</b>% decrease</div>
						</div>
					</div>
				</div>
			</div>

 
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
                                <li class="active"><a data-toggle="tab" href="#menu1">Loan Applicants</a></li>
                            </ul>
                            <div class="tab-content tab-custom-st">
                                <div id="home" class="tab-pane fade in active">
                                    <div class="tab-ctn">
                                       <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                                <thead>
                                <tr>
                                <th>MessengerID</th>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Registration Date</th>
                                <th>View</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                while($emp = mysqli_fetch_assoc($empResult)){
                                ?>
                                <tr>
                                <th scope="row"><?php echo $emp['user_id']; ?></th>
                                <td><?php echo $emp['fname']; ?></td>
                                <td><?php echo $emp['mname']; ?></td>
                                <td><?php echo $emp['lname']; ?></td>
                                <td><?php echo $emp['register_date']; ?></td>
                            
                                     <?php
                                    echo "<td><a href='lead-edit.php?user_id=".$emp['user_id']."'><img src='./images/edit.png' alt='Edit'></a></td>";
                                     ?>
                                    
                    
                                </tr>
                                <?php } ?>
                                </tbody>
                                </table>

                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                    <?php if($currentPage != $firstPage) { ?>
                                    <li class="page-item">
                                    <a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
                                    <span aria-hidden="true">First</span>
                                    </a>
                                    </li>
                                    <?php } ?>
                                    <?php if($currentPage >= 2) { ?>
                                    <li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
                                    <?php } ?>
                                    <li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
                                    <?php if($currentPage != $lastPage) { ?>
                                    <li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
                                    <li class="page-item">
                                    <a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
                                    <span aria-hidden="true">Last</span>
                                    </a>
                                    </li>
                                    <?php } ?>
                                    </ul>
                                    </nav>


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
                        <p>Copyright © 2019. All rights reserved. PATSY.</p>
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
</body>

</html>