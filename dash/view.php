<?php
$dbh = new PDO("mysql:host=patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com;dbname=patsy_db","patsydigital01","pAtsy06072018");
$id = isset($_GET['user_id'])? $_GET['user_id'] : "";
$stat = $dbh->prepare("select * from rfc_apply where doc2=?");
$stat->bindParam(1,$id);
$stat->execute();
$row = $stat->fetch();
header("Content-Type:".$row['doc2']);
echo $row['doc2'];
//echo '<img src="data:image/jpeg;base64,'.base64_encode($row['data']).'"/>';