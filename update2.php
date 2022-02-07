<?php
	include ('db.php');


	$id = $_POST['id'];
	$name2 = $_POST['name2'];
	$price2 = $_POST['price2'];
	$photo2 = $_FILES['file2']['name'];
	$tmp = $_FILES['file2']['tmp_name'];
	move_uploaded_file($tmp,"Photo/".$photo2);

	$description2 = $_POST['description2'];
	
	$sql = "UPDATE kitchen SET  name2 = '$name2', price2 = '$price2',photo2 ='$photo2',description2 = '$description2' WHERE id =$id";

	mysqli_query($con, $sql);

	header("location:list2.php");
?>


