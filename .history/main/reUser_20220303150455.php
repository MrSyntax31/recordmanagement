<?php
include('connect.php');	

$fullname = $_POST['fullname'];
$age = $_POST['age'];
$location = $_POST['location'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$status = $_POST['department'];


// query
$sql = "INSERT INTO users (fullname,age,location,gender,department) VALUES (:sas,:asas,:asafs,:offff,:statttt)";
$q = $db->prepare($sql);
$q->execute(array(':sas'=>$fullname,':asas'=>$age,':asafs'=>$location,':offff'=>$gender,':statttt'=>$department));
header("location: clients.php");


?>