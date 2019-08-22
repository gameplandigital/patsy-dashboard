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



