<?php
include('dbconnection.php');


$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);
$pid = $mydata['pid'];

if(!empty($pid)){
$sql = "DELETE FROM patientrecord WHERE pid = {$pid}";

if($conn->query($sql) == TRUE){
    echo "1";
}else{
    echo "0";
}
}



?>