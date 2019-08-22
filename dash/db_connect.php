<?php
$host = "patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com";
$db_name = "patsy_db";
$username = "patsydigital01";
$password = "pAtsy06072018";
 
try{
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
catch(PDOException $exception){
    //to handle connection error
    echo "Connection error: " . $exception->getMessage();
}
?>