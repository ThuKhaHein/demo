<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="bg-info">
    <div class="container">
        <h1 class="text-center mt-5 pt-3">Upload Kitchenware Equipmemts</h1>
        <div class=" row mt-4 justify-content-center">

          <form action="Upload2.php" method="post" class="col-md-6" enctype="multipart/form-data">
              <div class="form-group mb-3">
                  <label  class="text-white">Equipmemts Name</label>
                  <input type="text" name="name2" class="form-control" placeholder="Equipmemts Name">
              </div>

              <div class="form-group mb-3">
                  <label  class="text-white">Price</label>
                  <input type="text" name="price2" class="form-control" placeholder="Price">
              </div>

                  <div class="form-group mb-3">
                  <label  class="text-white">Upload Photo</label>
                  <input type="file" name="file" id="" class="form-control" requied>
              </div>

               <div class="form-group mb-3">
                  <label  class="text-white">Description</label>
                  <textarea type="text" name="description2" class="form-control" placeholder="Description"></textarea>
               </div>

              

               <div class="form-group mb-3">
                 <button type="submit" name="submit2" class="btn btn-success mt-4">Upload Your Category</button>
                 <a href="index.php" class="btn btn-success ml-3 mt-4">Home</a>
               </div>
             </form>
    </div>

</body>
</html>

<!--connect to the database-->
<?php
include ('db.php');

if (isset($_POST['submit2'])) {
  
  $photo2 = $_FILES['file']['name'];
  
  $tmp = $_FILES['file']['tmp_name'];

$name2 = $_POST['name2'];
$price2 = $_POST['price2'];
$description2 = $_POST['description2'];
  move_uploaded_file($tmp,"Photo/".$photo2);

  $sql = "INSERT INTO kitchen (name2, price2, description2, photo2) VALUES('$name2', '$price2', '$description2', '$photo2')";

  $res = mysqli_query($con,$sql);

  if ($res ==1) {

    echo "<script>alert('Upload Your categories successfully');</script>"; 
  }
  else{
    echo mysqli_error($con);
    exit;
  }
}



?>