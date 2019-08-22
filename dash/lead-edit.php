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



<?php

	$result = mysqli_query($mysqli,"SELECT * FROM rfc_apply WHERE user_id ='$id'");

echo "<table border='1'>
<tr>
<th>user_id</th>
<th>fname</th>
<th>mname</th>
<th>lname</th>
<th>marital_status</th>
<th>gender</th>
<th>birthday</th>
<th>educ_attain</th>
<th>nationality</th>
<th>address</th>
<th>year_stay</th>
<th>month_stay</th>
<th>email</th>
<th>m_number</th>
<th>monthly_salary</th>
<th>nature_employment</th>
<th>sector</th>
<th>position</th>
<th>years_employment</th>
<th>months_employment</th>
<th>loan_purpose</th>
<th>collateral_type</th>
<th>tenure_months</th>
<th>loan_amount_request</th>
<th>source_info</th>
<th>addition_income</th>
<th>terms_condition</th>
<th>doc1</th>
<th>doc2</th>
<th>doc3</th>
<th>doc4</th>
<th>register_date</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['user_id'] . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['mname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['marital_status'] . "</td>";
echo "<td>" . $row['gender'] . "</td>";
echo "<td>" . $row['birthday'] . "</td>";
echo "<td>" . $row['educ_attain'] . "</td>";
echo "<td>" . $row['nationality'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "<td>" . $row['year_stay'] . "</td>";
echo "<td>" . $row['month_stay'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['m_number'] . "</td>";
echo "<td>" . $row['monthly_salary'] . "</td>";
echo "<td>" . $row['nature_employment'] . "</td>";
echo "<td>" . $row['sector'] . "</td>";
echo "<td>" . $row['position'] . "</td>";
echo "<td>" . $row['years_employment'] . "</td>";
echo "<td>" . $row['months_employment'] . "</td>";
echo "<td>" . $row['loan_purpose'] . "</td>";
echo "<td>" . $row['collateral_type'] . "</td>";
echo "<td>" . $row['tenure_months'] . "</td>";
echo "<td>" . $row['loan_amount_request'] . "</td>";
echo "<td>" . $row['source_info'] . "</td>";
echo "<td>" . $row['addition_income'] . "</td>";
echo "<td>" . $row['terms_condition'] . "</td>";
echo "<td>" . $row['doc1'] . "</td>";
echo "<td>" . $row['doc2'] . "</td>";
echo "<td>" . $row['doc3'] . "</td>";
echo "<td>" . $row['doc4'] . "</td>";
echo "<td>" . $row['register_date'] . "</td>";


echo "</tr>";
}
echo "</table>";

// mysqli_close($con);
?>





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



