<?php
include("config.php");
include("session.php");

$id = $_POST['id'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$status = $_POST['status'];
$c_location = $_POST['c_location'];
$agent_name = $_POST['agent_name'];
// $date = $_POST['date']; 
date_default_timezone_set("Asia/Manila");
$date=date('Y-m-d H:i:s');
$aht_minutes = $_POST['aht_minutes'];
$aht_seconds = $_POST['aht_seconds'];
$remarks = $_POST['remarks'];

$sql = "UPDATE lead_users_unicare SET firstname='$firstname', middlename='$middlename', lastname='$lastname', status='$status', c_location='$c_location', agent_name='$agent_name', date='$date', remarks='$remarks' , aht_minutes='$aht_minutes', aht_seconds='$aht_seconds' 
WHERE firstname='$id'";

if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Record successfully updated!");';
	echo 'window.location="home.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Error Updating!");';
	echo 'window.location="home.php";';
	echo '</script>';
}
?>