<?php
	include('connect.php');
	$id=$_GET['id'];
	$result = $db->prepare("SELECT * FROM users WHERE id= :userid");
	$result->bindParam(':userid', $id);
	$result->execute();
	for($i=0; $rows = $result->fetch(); $i++){
?>
<form action="editUser.php" method="POST">
<input type="hidden" name="memids" value="<?php echo $id; ?>" />
Full Name<br>
<input type="text" name="fullname" value="<?php echo $rows['fullname']; ?>" /><br><br>
Age<br>
<input type="text" name="age" value="<?php echo $rows['age']; ?>" /><br><br>
Location<br>
<input type="text" name="location" value="<?php echo $rows['location']; ?>" /><br><br>
Gender<br>
<input type="text" name="gender" value="<?php echo $rows['gender']; ?>" /><br><br>
Department<br>
<input type="text" name="department" value="<?php echo $rows['department']; ?>" /><br><br>
Status<br>
<input type="text" name="status" value="<?php echo $rows['status']; ?>" /><br><br>

<input type="submit" value="Update">
</form>
<?php
	}
?>