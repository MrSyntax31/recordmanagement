<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM users WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>

<?php
include('connect.php');
$sql = "DELETE FROM users WHERE id='" . $_GET["userid"] . "'";

?>