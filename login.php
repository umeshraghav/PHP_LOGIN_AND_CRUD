<?php
session_start();

include('dbconnection.php');



$data = stripslashes(file_get_contents("php://input"));
$mydata = json_decode($data,true);
$username = $mydata['username'];
$password = $mydata['password'];


 
if(!empty($username)){

$sql = "SELECT * FROM employeerecords WHERE username ='$username' && password ='$password'";
$result = $conn->query($sql);

if($result->num_rows > 0){
    $data = array();

    while($row = $result->fetch_assoc()){
        $_SESSION["login"] = $row["Name"];
        echo "success";
    }
}else
{
    echo "Invalid Username or password";
}

}
else{
    echo "missing information";
} 



?>