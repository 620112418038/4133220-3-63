<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

$host ="sql311.byethost11.com";
$user = "b11_28370908";
$pass = "Palm0500";
$db = "b11_28370908_member";


try{
    $conn = new mysqli($host,$user,$pass,$db);
    //echo "Cnnected !!"
}
catch (Exception $e){
    echo $e->getMessage();
}

?>