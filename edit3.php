<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-info">
<div class="container">
		
		<h1 class="text-center mt-5 pt-3">Edit Your Home Applica Equipmemts</h1>
        <div class=" row mt-4 justify-content-center">

<?php
	include ('db.php');

	$id= $_GET['id'];

	$result = mysqli_query($con, "SELECT * FROM home WHERE id = $id");
	$row = mysqli_fetch_assoc($result);
	
?>
	<form action="update3.php" method="post" class="col-md-6" enctype="multipart/form-data">
		<input type="hidden" name="id"  value="<?php echo $row['id'] ?>">
              <div class="form-group mb-3">
                  <label  class="text-white">Equipmemts Name</label>
                  <input type="text" name="name3" class="form-control" value="<?php echo $row['name3'] ?>">
              </div>

              <div class="form-group mb-3">
                  <label  class="text-white">Price</label>
                  <input type="text" name="price3" class="form-control" value="<?php echo $row['price3'] ?>">
              </div>

                  <div class="form-group mb-3">
                  <label  class="text-white">Upload Photo</label>
                  <input type="file" name="file3" id="" class="form-control" value="<?php echo $row['photo3'] ?>" requied>
              </div>

               <div class="form-group mb-3">
                  <label  class="text-white">Description</label>
                  <textarea type="text" name="description3" class="form-control" placeholder="Description"><?php echo $row['description3'] ?></textarea>
               </div>

              

               <div class="form-group mb-3">
                 <button type="Edit3" name="Edit3" class="btn btn-success mt-4">Edit Your Category</button>
                 <a href="index.php" class="btn btn-success ml-3 mt-4">Home</a>
               </div>
             </form>

</div>
</body>
</html>

