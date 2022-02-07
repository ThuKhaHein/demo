<?php
	include ('db.php');


	$id = $_POST['id'];
	$name3 = $_POST['name3'];
	$price3 = $_POST['price3'];
	$photo3 = $_FILES['file3']['name'];
	$tmp = $_FILES['file3']['tmp_name'];
	move_uploaded_file($tmp,"Photo/".$photo3);

	$description3 = $_POST['description3'];
	
	$sql = "UPDATE home SET  name3 = '$name3', price3 = '$price3',photo3 ='$photo3',description3 = '$description3' WHERE id =$id";

	mysqli_query($con, $sql);

	header("location:list3.php");
?>


