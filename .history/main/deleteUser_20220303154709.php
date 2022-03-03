

<?php
include('connect.php');
$sql = "DELETE FROM users WHERE id='" . $_GET["userid"] . "'";

?>