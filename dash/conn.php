<?php
 
 
date_default_timezone_set("Asia/Manila");
$date=date('F j, Y g:i:a');
//MySQLi Procedural
$conn = mysqli_connect("patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com","patsydigital01","pAtsy06072018","patsy_db");
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
?>