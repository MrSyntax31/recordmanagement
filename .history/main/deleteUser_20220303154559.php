<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("DELETE FROM users WHERE id= :memid");
	$result->bindParam(':memid', $id);
	$result->execute();
?>

<?php
include_once 'database.php';
$sql = "DELETE FROM employee WHERE userid='" . $_GET["userid"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>