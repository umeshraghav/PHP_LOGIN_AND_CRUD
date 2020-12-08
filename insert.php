<?php
include('dbconnection.php');

$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);
/*
 : firstName,
 : lastName,
 : gender,
 : DOB,
 : address,
 : city,
 : province,
 : postalCode,
 : phone,
 : email,
 : medication,
 : allergies,
 : refDoctor */

$pid = rand(10,10000);
$firstName = $mydata['firstName'];
$lastName = $mydata['lastName'];
$gender = $mydata['gender'];
$DOB = $mydata['DOB'];
$address = $mydata['address'];
$city = $mydata['city'];
$province = $mydata['province'];
$postalCode = $mydata['postalCode'];
$phone = $mydata['phone'];
$email = $mydata['email'];
$medication = $mydata['medication'];
$allergies = $mydata['allergies'];
$refDoctor = $mydata['refDoctor'];
 


if(!empty($firstName) && !empty($lastName) && !empty($gender)&& !empty($DOB)&& !empty($address)&& !empty($city)&& !empty($province)&& !empty($postalCode)
&& !empty($phone)&& !empty($email)&& !empty($medication)&& !empty($allergies)&& !empty($refDoctor)
){
    
    $sql = "insert into patientrecord values ('$pid','$firstName', '$lastName', '$gender','$DOB','$address','$city','$province','$postalCode','$phone','$email','$medication','$allergies','$refDoctor')";
    if($conn->query($sql) == TRUE){
        echo "Saved";
    }else{
        echo "Unable to save";
    }
}else{
    echo "Fill All Fields";
}


?>