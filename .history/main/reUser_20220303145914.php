<?php
include('connect.php');	

$fullname = $_POST['fullname'];
$age = $_POST['age'];
$location = $_POST['location'];
$gender = $_POST['gender'];
$department = $_POST['department'];


// query
$sql = "INSERT INTO users (fullname,doc_type,age,office,status,dateout,receive_by,ft) VALUES (:sas,:asas,:asafs,:offff,:statttt,:dot,:rd,:ft)";
$q = $db->prepare($sql);
$q->execute(array(':sas'=>$date,':asas'=>$doc_type,':asafs'=>$desc,':offff'=>$office,':statttt'=>$status,':dot'=>$dateo,':rd'=>$rb,':ft'=>$ft));
header("location: index.php");


?>