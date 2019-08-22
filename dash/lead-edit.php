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


                                    <div id="pagination_controls"><?php echo $paginationCtrls; ?></div>
                                </div>
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



