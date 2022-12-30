<?php

$serverName = "localhost";
$userName  = "root";
$password = "";
$dbName = "quiz";

//create connection

$con = mysqli_connect($serverName,$userName,$password,$dbName);

if(mysqli_connect_errno()) {
    echo "Failed to connect!";
    exit();
  echo "connection success";  
}
$query = "SELECT QUESTNO,QUESTION,opt1,opt2,opt3,answer from data";
$result=mysqli_query($con, $query);
// print_r($result);
//$numberofrow=mysqli_num_rows($result);

$results = mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($results);
exit;

?>