<?php
	include("session.php");
	include("db_connect.php");
	$user_id = $_GET['user_id'];
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

</head>
<body>
<div class="icon-bar">
  <a href="home.php"><i class="fa fa-home"></i></a> 
  <a href="lead_users.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="lead-register.php"><i class="fa fa-registered"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <h2>Update</h2> -->
<hr/>


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
                                 <li><a data-toggle="tab" href="#menu1">Loan Applicants</a></li>
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
                                      <table class="table " cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
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





<form action="update_lead.php" method="POST">
  <div class="container">
  <?php
	$result = mysqli_query($mysqli,"SELECT * FROM rfc_apply WHERE user_id ='$id'");
	while($row = mysqli_fetch_array($result))
	{



    echo"<input type='text' placeholder='Company Name' name='fname' value='{$row['fname']}' required>";
    echo"<input type='text' placeholder='Contact Person' name='middlename' value='{$row['mname']}' required>";
    echo"<input type='number' placeholder='Contact Number' name='lastname' value='{$row['lname']}' required>";
    echo"<input type='text' name='c_location' value='{$row['c_location']}'required>";
  
	echo"</div>";
	}
  ?>
  </div>
</form>



