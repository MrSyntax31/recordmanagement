<?php
// configuration
include('connect.php');

// new data
$fullname = $_POST['fullname'];
$age = $_POST['age'];
$location = $_POST['location'];
$gender = $_POST['gender'];
$department = $_POST['department'];
$id = $_POST['memids'];
$status = $_POST['status'];

// query
$sql = "UPDATE users 
        SET fullname=?, age=?, location=?, gender=?, department=?, dateout=?, receive_by=?, ft=?
		WHERE id=?";
$q = $db->prepare($sql);
$q->execute(array($fullname,$age,$location,$gender,$status,$dateo,$rb,$ft,$id));
header("location: index.php");

?>