<?php
include("config.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$date = date('Y-m-d H:i:s');
$login_time = $_POST['login_time']; 
$username = $mysqli->real_escape_string($username);
 
$query = "SELECT * FROM login_users WHERE username = '$username' AND password='$password';";
$result = $mysqli->query($query);	
$rows = $result->fetch_assoc();			
 
if($rows['userlevel'] == '1') 
{
	$_SESSION['user'] = $username;
	$date = date('Y-m-d H:i:s');
    $query = "UPDATE login_users SET login_time = '$user' WHERE username = '$username'";
	header('Location: home.php');  
}

else if($rows['userlevel'] == '2') 
{
	$_SESSION['user'] = $username;
	$date = date('Y-m-d H:i:s');
    $query = "UPDATE login_users SET login_time = '$user' WHERE username = '$username'";
	header('Location: air21.php');  
}
else{ 
	header('Location: rfc.php');
}
?>




