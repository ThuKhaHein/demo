<?php
	include("db.php");

	$id = $_GET['id'];
	$sql ="DELETE FROM order_product WHERE id = $id";
	mysqli_query($con, $sql);

	header("location: read_msg.php");
?>