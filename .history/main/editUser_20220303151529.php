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
<input type="text" name="fullname" value="<?php echo $rows['fullname']; ?>" /><br><br>
Age<br>
<input type="text" name="age" value="<?php echo $rows['age']; ?>" /><br><br>
Location<br>
<input type="text" name="rb" value="<?php echo $rows['receive_by']; ?>" /><br><br>
Gender<br>
<input type="text" name="rb" value="<?php echo $rows['receive_by']; ?>" /><br><br>
Department<br>
<input type="text" name="rb" value="<?php echo $rows['receive_by']; ?>" /><br><br>
Status<br>
<input type="text" name="rb" value="<?php echo $rows['receive_by']; ?>" /><br><br>

<input type="submit" value="Save" />
</form>
<?php
	}
?>