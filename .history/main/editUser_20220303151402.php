<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM users WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++){
?>
<form action="editUsers.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
Full Name<br>
<input type="text" name="date" value="<?php echo $rows['date']; ?>" /><br><br>
Age<br>
<input type="text" name="dateo" value="<?php echo $rows['dateout']; ?>" /><br><br>
Location<br>
<input type="text" name="rb" value="<?php echo $rows['receive_by']; ?>" /><br><br>
Location<br>
<input type="text" name="rb" value="<?php echo $rows['receive_by']; ?>" /><br><br>
Location<br>
<input type="text" name="rb" value="<?php echo $rows['receive_by']; ?>" /><br><br>

<input type="submit" value="Save" />
</form>
<?php
	}
?>