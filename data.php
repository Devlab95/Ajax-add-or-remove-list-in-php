<?php 
$con = new mysqli("localhost", "root", "", "add_rem_field");

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$sql = $con->query("INSERT INTO user (name) VALUES ('$name')");
}
if (isset($_POST['remove'])) {
	$remove_id = $_POST['remove'];
	$sql = $con->query("DELETE FROM user WHERE id = '$remove_id'");
}
?>