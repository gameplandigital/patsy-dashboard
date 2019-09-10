<?php
	include("session.php");
	include("db_connect.php");
  $user_id = $_GET['user_id'];
  include('conn.php');

  $bquery = "SELECT fname FROM rfc_apply WHERE user_id ='$user_id'";
  $bbquery = filterRecord($bquery);
  $brow = mysqli_fetch_array($bbquery);


  if(isset($_POST['search']))
  {
    $valueToSearh = $_POST['valueToSearh']; 
    $query = "SELECT * FROM rfc_apply WHERE user_id ='$user_id'";
    $nquery = filterRecord($query);
  }
  else
  {
    $query = "SELECT * FROM rfc_apply WHERE user_id ='$user_id'";
    $nquery = filterRecord($query);
  }
  
  function filterRecord($query)
  {
    include("config.php");
    $filter_result = mysqli_query($mysqli, $query);
    return $filter_result;
  }




?>



<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("id");
            if(optionValue){
                $(".box").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".box").hide();
            }
        });
    }).change();
});
</script>
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
<!-- HEADER -->


<style>


table {
  width:90%; 
  margin-left:28%; 
  margin-right:15%;

  display: block;
  height: 550px;
  overflow-y: scroll;

  border-collapse: collapse;
  border-spacing: 0;
  width: 50%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>

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
<!-- END HEADER -->

<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <h2>Update</h2> -->

<div class="tabs-info-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="widget-tabs-int">
                        <div class="tab-hd">
                            <h1><?php echo $brow['fname']; ?>aInformation</h1>
                            
                        </div>
                            <div class="tab-content tab-custom-st">
                                <div id="home" class="tab-pane fade in active" style="overflow-x:auto;">
                                    <div class="tab-ctn" style="overflow-x:auto;">
                                       <table cellpadding="0" cellspacing="0" style="overflow-x:auto;">
                        <tbody>
                            <?php
                            while($row = mysqli_fetch_array($nquery)){
                            ?>
                            <tr class="odd gradeX">
                                <th>User ID :</th>
                                <td><?php echo $row['user_id']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>First Name :</th>
                                <td><?php echo $row['fname']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Middle Name :</th>
                                <td><?php echo $row['mname']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Last Name :</th>
                                <td><?php echo $row['lname']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Marital Status :</th>
                                <td><?php echo $row['marital_status']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Gender :</th>
                                <td><?php echo $row['gender']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Birthday :</th>
                                <td><?php echo $row['birthday']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Educational Attainment :</th>
                                <td><?php echo $row['educ_attain']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Nationality :</th>
                                <td><?php echo $row['nationality']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Address :</th>
                                <td><?php echo $row['address']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Year Stay :</th>
                                <td><?php echo $row['year_stay']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Month stay :</th>
                                <td><?php echo $row['month_stay']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Email :</th>
                                <td><?php echo $row['email']; ?></td>
                            </tr>
                            <tr class="odd gradeX">                           
                                <th>Mobile Number :</th>
                                <td><?php echo $row['m_number']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Monthy Salary :</th>
                                <td><?php echo $row['monthly_salary']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Nature of Employment :</th>
                                <td><?php echo $row['nature_employment']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Sector :</th>
                                <td><?php echo $row['sector']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Position :</th>
                                <td><?php echo $row['position']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Year(s) Employed :</th>
                                <td><?php echo $row['years_employment']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Month(s) Employed :</th>
                                <td><?php echo $row['months_employment']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Loan purpose :</th>
                                <td><?php echo $row['loan_purpose']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Collateral Type :</th>
                                <td><?php echo $row['collateral_type']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Tenure in months :</th>
                                <td><?php echo $row['tenure_months']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Loan amount request :</th>
                                <td><?php echo $row['loan_amount_request']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Source of information :</th>
                                <td><?php echo $row['source_info']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Additional Income :</th>
                                <td><?php echo $row['addition_income']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Accepted the terms and conditions :</th>
                                <td><?php echo $row['terms_condition']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Latest I.D 1 :</th>
                                <td><a href="download.php?file=<?php echo $row['doc1']; ?>"><?php echo $row['doc1']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Latest I.D 2 :</th>
                                <td><a href="download.php?file=<?php echo $row['doc2']; ?>"><?php echo $row['doc2']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Latest Billing 1 :</th>
                                <td><a href="download.php?file=<?php echo $row['doc3']; ?>"><?php echo $row['doc3']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Latest Billing 2 :</th>
                                <td><a href="download.php?file=<?php echo $row['doc4']; ?>"><?php echo $row['doc4']; ?></td>
                            </tr>
                            <tr class="odd gradeX">
                                <th>Date Get started :</th>
                            <td><?php echo $row['register_date']; ?></td>     
                            <tr class="odd gradeX">
                                <th>Date Registered :</th>
                            <td><?php echo $row['register_date']; ?></td>                             
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





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



