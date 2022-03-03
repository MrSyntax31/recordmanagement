<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM users WHERE id= "");
	$result->bindParam(':memid', $id);
	$result->execute();
?>

