
<form action="reg.php" method="POST">
Full Name<br>
<input type="text" name="date" /><br><br>
Age<br>
<input type="text" name="dateo" /><br><br>
Location<br>
<input type="text" name="rb" /><br><br>
Gender<br>
<input type="text" name="date" /><br><br>
Department<br>
<input type="text" name="date" /><br><br>
Document Type<br>
<select name="doc_type" class="ed">
	<?php
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM doc_type ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Description<br>
<textarea name="desc"></textarea><br><br>
Office<br>
<select name="office" class="ed">
	<?php
	include('connect.php');		
		$result = $db->prepare("SELECT * FROM offices ORDER BY id DESC");
		$result->execute();
		for($i=0; $row = $result->fetch(); $i++){
		echo '<option value="'.$row[name].'">'.$row[name].'</option>';
		}
	?>
</select><br /><br>
Status<br>
<input type="text" name="status" /><br><br>
Forwarded To<br>
<input type="text" name="ft" /><br><br>
<input type="submit" value="Save" />
</form>