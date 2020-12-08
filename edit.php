<?php

include('dbconnection.php');



$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);
$pid = $mydata['pid'];

if(!empty($pid)){

$sql = "SELECT * FROM patientrecord WHERE pid ={$pid}";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
echo json_encode($row);

}
 



?>