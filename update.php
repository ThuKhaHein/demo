<?php
	include ('db.php');


	$id = $_POST['id'];
	$name = $_POST['name'];
	$price = $_POST['price'];
	$photo = $_FILES['file']['name'];
	$tmp = $_FILES['file']['tmp_name'];
	move_uploaded_file($tmp,"Photo/".$photo);

	$description = $_POST['description'];
	
	$sql = "UPDATE categories SET  name = '$name', price = '$price',photo ='$photo',description = '$description' WHERE id =$id";

	mysqli_query($con, $sql);

	header("location:list.php");
?>


