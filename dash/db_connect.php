<?php
$host = "patsydb.com4k2xtorpw.ap-southeast-1.rds.amazonaws.com";
$db_name = "patsydigital01";
$username = "pAtsy06072018";
$password = "patsy_db";
 
try{
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
}
 
catch(PDOException $exception){
    //to handle connection error
    echo "Connection error: " . $exception->getMessage();
}
?>