
<?php require_once('connection.php')  ;?>
<?php
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($connection, "DELETE FROM contact WHERE id=$id");

	header('location: dashboard.php');
}
 ;?>