<?php
	include("session.php");
	include("config.php");
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
	// $result = mysqli_query($mysqli,"SELECT * FROM lead_users WHERE firstname ='$id'");
	// while($row = mysqli_fetch_array($result))
	// {

    echo"<input type='text' placeholder='Company Name' name='fname' value='{$row['firstname']}' required>";
    echo"<input type='text' placeholder='Contact Person' name='middlename' value='{$row['middlename']}' required>";
    echo"<input type='number' placeholder='Contact Number' name='lastname' value='{$row['lastname']}' required>";
    echo"<input type='text' name='c_location' value='{$row['c_location']}'required>";
    echo"<select name='status' style='width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 2px solid #ccc; box-sizing: border-box;'>
      <option value='{$row['status']}'>{$row['status']}</option>
      <option value='New_Leads'>New Leads</option>
      <option value='Set_Meeting'>Set Meeting</option>
      <option value='Callback'>Callback</option>
      <option value='Trash'>Trash</option>
      <option value='OnBoarded'>On-Boarded</option>
    </select>";
     echo"<input type='number' name='site' value='{$row['site']}'required>";
     echo"<input type='number' name='spots' value='{$row['spots']}'required>";
     echo"<select name='package' style='width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 2px solid #ccc; box-sizing: border-box;'>
      <option value='{$row['package']}'>{$row['package']}</option>
      <option value='100000'>Package A | 100,000</option>
      <option value='200000'>Package B | 200,000</option>
      <option value='300000'>Package C | 300,000</option>
      <option id='green'>Customize</option>
    </select>";

    echo"<div class='green box'><input type='number' name='custom' placeholder='Input Amount'></div>";

    echo"<input type='hidden' name='vat' value='0.12'>";

    echo"<div class='clearfix'>";
    echo"<button type='submit' class='signupbtn'>Update</button>";
	echo"</div>";
	// }
  ?>
  </div>
</form>



