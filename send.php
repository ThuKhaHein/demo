<!--<?php 
date_default_timezone_set('Asia/Yangon');
//echo date("d/m/Y h:i:s A");
//echo date('y-m-d h:i:s');
//echo date('F d, Y, h:i:s A');
?>-->

<!-- Order form exercise equipment to database -->
<?php 
//for online server ==> ob_start();
include ('db.php');

if(isset($_POST['order']))
{
  $name = $_POST['name'];
  
  $price = $_POST['price'];
  
  $quantity = $_POST['quantity'];
  $fname = $_POST['fname'];
  $phone = $_POST['phone'];
  $address= $_POST['address'];
  

  $sql_insert = mysqli_query($con, "INSERT INTO  order_product(name,price,quantity,fname,phone,address,cr_date) VALUES ('$name', '$price', '$quantity', '$fname', '$phone','$address', NOW())"); 
  if($sql_insert)
  {
    echo "<script>alert('Order send successfully');</script>";

    header("location:order_end.php");
  }
  else
  {
    echo mysqli_error($con);

    header("location:order_end.php");
  }
   //for online server ==> ob_end_flush();
}

?>

<!-- Order form exercise equipment end to database -->


