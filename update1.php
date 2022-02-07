<?php
	include ('db.php');


	$id = $_POST['id'];
	$name1 = $_POST['name1'];
	$price1 = $_POST['price1'];
	$photo1 = $_FILES['file1']['name'];
	$tmp = $_FILES['file1']['tmp_name'];
	move_uploaded_file($tmp,"Photo/".$photo1);

	$description1 = $_POST['description1'];
	
	$sql = "UPDATE gym SET  name1 = '$name1', price1 = '$price1',photo1 ='$photo1',description1 = '$description1' WHERE id =$id";

	mysqli_query($con, $sql);

	header("location:list1.php");
?>


