'<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mr-Shop Myanmar</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/ownstyle.css">



</head>

<body id="page-top" class="bg-gradient-primary">
  <div class="">
  
  <h4 class="sidebar-brand-text mx-3 text-center font-weight-bold text-success">
   <img src="img/logo1.jpg" class="mr-3" style="width: 50px; height: 40px;">Mr.Shop Myanmar Online Shop</h4></div>

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
       <div class="sidebar-brand-icon">
          <!--<i class="fas fa-laugh-wink"></i>-->
          <!--<i class="fas fa-shopping-cart"></i>-->
           

        </div>
        
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-cart-arrow-down"></i>
          <span>Categories</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="ex_eq.php">Exercise equipment</a>
            <a class="collapse-item" href="gym_eq.php">GYM Equipment</a>
            <a class="collapse-item" href="kitchen_eq.php">Kitchenware Equipment</a>
            <a class="collapse-item" href="home_eq.php">Home App Equipment</a>
          </div>
        </div>
      </li>



       <!-- Nav Item - Pages About Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="about.php"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fab fa-aws"></i>
          <span>About</span>
        </a>
      </li>

       <!-- Nav Item - Pages service Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="service.php"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fab fa-servicestack"></i>
          <span>Our Service</span>
        </a>
      </li>
      <!-- Nav Item - Pages fb Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="https://www.facebook.com/Goldenmyanmarby2020"  aria-expanded="true" aria-controls="collapseTwo">
         <i class="fab fa-facebook-square"></i>
          <span>Our Facebook Page</span>
        </a>
      </li>

      <!-- Nav Item - Pages About Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="login.php"  aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-sign-in-alt"></i>
          <span>Login</span>
        </a>
      </li>

      

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

         <!-- <form action="search.php" method="POST">
  <input type="text" name="search" placeholder="Search">
  <button type="submit" name="submit-search"> Search</button>
</form>-->



          <!-- Topbar Search-->
          
          <form action="search.php" method="POST"  class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" name="search" class="form-control bg-light border-0 small " placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary " name="submit-search" type="">
                  <i class="fas fa-search fa-sm"></i>
                </button>
  
              </div>
            </div>
          </form>
                   <!-- exercise eq-->
          


<!-- exercise eq end -->


          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            

            

            <!-- Nav Item - Alerts  delete-->
            <div class="container mt-2">
                <div class="row">
                <p> <i class="fas fa-phone-square-alt"></i> Call us </p>
                <p>-09403257569<br>-09407146127  <i class="fab fa-viber"></i></p>
                  </div>           
              
            </div>
            <!--userinformation delete -->

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <!--<h1 class="h3 mb-0 text-gray-800">WELCOME TO MY SHOP</h1>-->
            
          </div>


<!--slide 1  start-->
      <style type="text/css">
      .exercise{
            background-color: #ADD8E6;
          }
          .gym{
            background-color: #82CAFA;
          }
          .kitchen{
            background-color: #4E8975;
          }
          .home{
            background-color: #566D7E;
          }
      </style>
    <div id="carouselExampleControls" class="carousel slide rounded exercise" data-ride="carousel">
      <div class="container-fluid ">
        <div class="row">
        
      
      <h3 class="mt-3 text-success col-lg-8">Exercise Equipments </h3>
      <style type="text/css">
        #link{
          margin-left: 260px;
        }
      </style>
         <a href="ex_eq.php" class="btn btn-info mt-3 col-lg-0" id="link">More</a>
         
      </div>
    </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row">

      <?php 

include ('db.php');

$sql ="select * from categories where id between 1 and 4";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name= $row['name'];
  $price= $row['price'];
  $photo = $row['photo'];

echo "<div class='col-md-3 col-sm-6 mt-2 mb-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/".$photo."'> ";
       
   echo "<div class='card-body'>";
    
        echo "<h5class='card-title mt-5 mb-3 ml-2'>".$name."</a></h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price."</h5>";
        echo "<a href='info00.php?id=$id' class='btn btn-primary text-white'>Info</a>";
        
            echo "</div>";
          echo "</div>";
        echo "</div>";

  
}

?>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row">
      
      <?php 

include ('db.php');

$sql ="select * from categories where id between 1 and 4";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name= $row['name'];
  $price= $row['price'];
  $photo = $row['photo'];

echo "<div class='col-md-3 col-sm-6 mt-3 mb-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/".$photo."'> ";
       
   echo "<div class='card-body'>";
    
        echo "<h5class='card-title mt-5 mb-3 ml-2'>".$name."</a></h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price."</h5>";
        echo "<a href='info00.php?id=$id' class='btn btn-primary text-white'>Info</a>";
        
            echo "</div>";
          echo "</div>";
        echo "</div>";

  
}

?>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row">
      
      <?php 

include ('db.php');

$sql ="select * from categories where id between 1 and 4";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name= $row['name'];
  $price= $row['price'];
  $photo = $row['photo'];

echo "<div class='col-md-3 col-sm-6 mt-3 mb-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/".$photo."'> ";
       
   echo "<div class='card-body'>";
    
        echo "<h5class='card-title mt-5 mb-3 ml-2'>".$name."</a></h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price."</h5>";
        echo "<a href='info00.php?id=$id' class='btn btn-primary text-white'>Info</a>";
        
            echo "</div>";
          echo "</div>";
        echo "</div>";

  
}

?>
</div>
</div>
    </div>
  </div>
  <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>

   <!--slide 1 end -->

  <!--slide 2  start-->
 <div id="carouselExampleControls" class="carousel slide gym rounded mt-3" data-ride="carousel">
      <div class="container-fluid">
        <div class="row">
        
      
      <h3 class="mt-3 text-success col-lg-8">GYM Equipments </h3>
      <style type="text/css">
        #link{
          margin-left: 260px;
        }
      </style>
         <a href="gym_eq.php" class="btn btn-info mt-3 col-lg-0" id="link">More</a>
         
      </div>
    </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row">

      <?php 

include ('db.php');

$sql ="select * from gym where id between 1 and 4";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name1= $row['name1'];
  $price1= $row['price1'];
  $photo1 = $row['photo1'];

      echo "<div class='col-md-3 col-sm-6 mt-3 mb-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo1."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name1."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price1."</h5>";
        echo "<a href='info01.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row">
      
      <?php 

include ('db.php');

$sql ="select * from gym where id between 1 and 4";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name1= $row['name1'];
  $price1= $row['price1'];
  $photo1 = $row['photo1'];

      echo "<div class='col-md-3 col-sm-6 mt-3 mb-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo1."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name1."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price1."</h5>";
        echo "<a href='info01.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row">
      
      <?php 

include ('db.php');

$sql ="select * from gym where id between 1 and 4";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name1= $row['name1'];
  $price1= $row['price1'];
  $photo1 = $row['photo1'];

      echo "<div class='col-md-3 col-sm-6 mt-3 mb-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo1."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name1."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price1."</h5>";
        echo "<a href='info01.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
</div>
</div>
    </div>
  </div>
  <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>
<!--slide 2 end -->


<!--slide 3  start-->
 <div id="carouselExampleControls" class="carousel slide kitchen rounded mt-3" data-ride="carousel">
      <div class="container-fluid">
        <div class="row">
        
      
      <h3 class="mt-3 text-success col-lg-8">Kitchenware Equipments </h3>
      <style type="text/css">
        #link{
          margin-left: 260px;
        }
      </style>
         <a href="kitchen_eq.php" class="btn btn-info mt-3 col-lg-0" id="link">More</a>
         
      </div>
    </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row">

      <?php 

include ('db.php');

$sql ="select * from kitchen";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name2= $row['name2'];
  $price2= $row['price2'];
  $photo2 = $row['photo2'];

      echo "<div class='col-md-3 col-sm-6 mt-3 mb-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo2."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name2."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price2."</h5>";
        echo "<a href='info02.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row">
      
      <?php 

include ('db.php');

$sql ="select * from kitchen";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name2= $row['name2'];
  $price2= $row['price2'];
  $photo2 = $row['photo2'];

      echo "<div class='col-md-3 col-sm-6 mt-3 mb-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo2."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name2."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price2."</h5>";
        echo "<a href='info02.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row">
      
      <?php 

include ('db.php');

$sql ="select * from kitchen";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name2= $row['name2'];
  $price2= $row['price2'];
  $photo2 = $row['photo2'];

      echo "<div class='col-md-3 col-sm-6 mt-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo2."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name2."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price2."</h5>";
        echo "<a href='info02.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
</div>
</div>
    </div>
  </div>
  <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>
<!--slide 3 end -->


<!--slide 4  start-->
 <div id="carouselExampleControls" class="carousel slide home rounded mt-3" data-ride="carousel">
      <div class="container-fluid">
        <div class="row">
        
      
      <h3 class="mt-3 text-success col-lg-8">Home App Equipments</h3>
      <style type="text/css">
        #link{
          margin-left: 250px;
        }
      </style>
         <a href="home_eq.php" class="btn btn-info mt-3 col-lg-0" id="link">More</a>
         
      </div>
    </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="container">
        <div class="row">

      <?php 

include ('db.php');

$sql ="select * from  home";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name3= $row['name3'];
  $price3= $row['price3'];
  $photo3 = $row['photo3'];

      echo "<div class='col-md-3 col-sm-6 mt-3 mb-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo3."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name3."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price3."</h5>";
        echo "<a href='info03.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row">
      
      <?php 

include ('db.php');

$sql ="select * from  home";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name3= $row['name3'];
  $price3= $row['price3'];
  $photo3 = $row['photo3'];

      echo "<div class='col-md-3 col-sm-6 mt-3 mb-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo3."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name3."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price3."</h5>";
        echo "<a href='info03.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
</div>
</div>
    </div>
    <div class="carousel-item">
      <div class="container">
        <div class="row">
      
      <?php 

include ('db.php');

$sql ="select * from  home";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name3= $row['name3'];
  $price3= $row['price3'];
  $photo3 = $row['photo3'];

      echo "<div class='col-md-3 col-sm-6 mt-3 mb-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo3."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name3."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price3."</h5>";
        echo "<a href='info03.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
</div>
</div>
    </div>
  </div>
  <!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>-->
</div>
<!--slide 4 end -->


  <!--<div class="container">
    <div class="row">
<?php 

include ('db.php');

$sql ="select * from categories";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name= $row['name'];
  $price= $row['price'];
  $photo = $row['photo'];

echo "<div class='col-md-3 col-sm-6 mt-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/".$photo."'> ";
       
   echo "<div class='card-body'>";
    
        echo "<h5class='card-title mt-5 mb-3 ml-2'>".$name."</a></h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price."</h5>";
        echo "<a href='info00.php?id=$id' class='btn btn-primary text-white'>Info</a>";
        
            echo "</div>";
          echo "</div>";
        echo "</div>";

  
}

?>
</div>
</div>





<div class="container ">
  <div class="row">

                
<?php 

include ('db.php');

$sql ="select * from gym";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name1= $row['name1'];
  $price1= $row['price1'];
  $photo1 = $row['photo1'];

      echo "<div class='col-md-3 col-sm-6 mt-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo1."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name1."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price1."</h5>";
        echo "<a href='info01.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
    
        </div>
      </div>



<div class="container">
  <div class="row">

                
<?php 

include ('db.php');

$sql ="select * from kitchen";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name2= $row['name2'];
  $price2= $row['price2'];
  $photo2 = $row['photo2'];

      echo "<div class='col-md-3 col-sm-6 mt-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo2."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name2."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price2."</h5>";
        echo "<a href='info02.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
    
        </div>
      </div>



<div class="container">
  <div class="row">

                
<?php 

include ('db.php');

$sql ="select * from  home";
$res = mysqli_query($con,$sql);

while ($row = mysqli_fetch_assoc($res)) {

  $id = $row['id'];
  $name3= $row['name3'];
  $price3= $row['price3'];
  $photo3 = $row['photo3'];

      echo "<div class='col-md-3 col-sm-6 mt-3'>";
      echo "<div class='card card-block mr-2>'";
      echo "<div id='img_div'>";
   
        
        echo "<img  src='Photo/" .$photo3."'> ";
       
    echo "<div class='card-body'>";
    
        echo "<h5 class='card-title mt-5 mb-3 ml-2'>".$name3."</h5>";
        echo "<h5 class='card-title mt-2 font-weight-bold text-info mb-3 ml-2'>".$price3."</h5>";
        echo "<a href='info03.php?id=$id' class='btn btn-primary text-white'>Info</a>";

        
            echo "</div>";
          echo "</div>";
        echo "</div>";


    }

    ?>
    
        </div>
      </div>-->

<!-- Footer-->
        <footer class="footer text-center">
            <div class="container bg-gradient-primary mt-3 rounded">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0 mt-3">
                      <h4 class="text-uppercase mb-4 font-weight-bold text-success">Track information</h4>
                        <a class="btn btn-outline-light btn-social mx-1" data-toggle="tooltip" data-placement="right" title="09407146127" id="link" href="#!"><i class="fas fa-truck-moving"></i></a>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0 mt-4">
                      
                      </style>
                        <h4 class="text-uppercase mb-4 font-weight-bold text-success">Thank You</h4>
                        
                    </div>
                    <!-- Footer About Text-->
                   <div class="col-lg-4 mb-5 mb-lg-0 mt-3">
                      <style type="text/css">
                        .img{
                          width: 30px;
                          height: 30px;
                           }
                           #link{
                            margin-top: -20px;
                           }
                      </style>
                        <h4 class="text-uppercase mb-4 font-weight-bold text-success">Payment method</h4>
                        <a class="btn btn-outline-light btn-social mx-1 " href="#!" id="link"><img class="img" src="img/wave-money-android.png"></a>
                        <a class="btn btn-outline-light btn-social mx-1 " href="#!" id="link"><img class="img" src="img/aya.png"></a>
                        <a class="btn btn-outline-light btn-social mx-1 " href="#!" id="link"><img class="img" src="img/cash.png"></a>
                        
                    </div>
                </div>
            </div>
        </footer>

          
<!-- Footer 
  <footer>
    <div class="container bg-gradient-primary mt-5">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item mt-3">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/Goldenmyanmarby2020">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="far fa-envelope fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted"></p>
        </div>
      </div>
    </div>
  </footer>-->

        <!-- /.container-fluid

      </div> -->
      <!-- End of Main Content -->


      <!-- Footer 
      <footer class="sticky-footer">
        <div class="container-fluid my-auto">
          <div class="copyright text-center my-auto">
            <span></span>
          </div>
        </div>
      </footer>-->
      <!-- End of Footer

    </div> -->
    <!-- End of Content Wrapper 

  </div>-->
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>-->

  

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

 

</body>

</html>
