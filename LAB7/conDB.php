<?php
ini_set('display_errors'1);
ini_set('display_startup_errors'1);
error_reporting(E_ALL)

$host = "sql305.byethost6.com"
$user = "b6_28399659"
$pass = "x1a8@1f"
$dp = "b6_28399659_member"






try{
    $conn = new mysqli($host,$user,$pass,$db);
    //echo "Cnnected !!"
}
catch (Exception $e){
    echo $e->getMessage();
}
?>