<?php
include('dbconnection.php');
 
$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);

$pid = $mydata['pid'];
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
     
   $sql="UPDATE patientrecord SET firstName='$firstName',lastName='$lastName',gender='$gender'
   ,DOB='$DOB' ,address='$address' ,city='$city',province='$province',postalCode='$postalCode',phone='$phone',email='$email',medication='$medication',allergies='$allergies',refDoctor='$refDoctor'
    WHERE pid={$pid}";
//$sql = "UPDATE student SET name={$name}, email = {$email},password={$password} WHERE id = {$id}";
    if($conn->query($sql) == TRUE){
        echo "Updated";
    }else{
        echo "Cant Update";
    }
}else{
    echo "Fill All Fields";
}


?>