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
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-shopping-cart"></i>

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

      

      <!-- Nav Item - Charts -->
     

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

          <!-- Topbar Search -->
          <form action="search.php" method="POST" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" name="search" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" name="submit-search" type="">
                  <i class="fas fa-search fa-sm"></i>
                </button>
  
              </div>
            </div>
          </form>


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
       <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/service1.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-2">
               
                <span class="section-heading-lower font-weight-bold">Convenient Shopping! Convenient Service!</span>
              </h2>
              <p class="ml-4">Exercise Equipment , Kitchenware , Home  appliances & Living etc.
              Shopping from your home/office.
              You can make easy order from messenger chat box,Viber,Phone call and messaging.
              Risk free ,stress free! Payments can be made bank transfer and wavemoney ,cash on delivery.
              Your order will be delivered to the comfort of your home/office within 1- 2 days.
              </p>

              <h2 class="section-heading mb-2 mt-4">
               
                <span class="section-heading-lower font-weight-bold">Delivery timeline Services</span>
              </h2>
              <p class="ml-4">Delivery times will be agreed with you at the time of placing your order materials . 
              Your order will be delivered to the comfort of your home/office within 2 days.
              We deliver to every corner and address in Yangon and other cities throughout Myanmar.
              </p>

              <h2 class="section-heading mb-2 mt-4">
               
                <span class="section-heading-lower font-weight-bold">How to order easiest (3 state)</span>
              </h2>
              <p class="ml-4">(1) Choose Product
              Choose a product of your choice, you can discover products under daily discovery, explore our categories or use the search bar to search for product of your choice.<br>
              (2) Fill Up Delivery Option ,Address ,Contact No.
              Choose your delivery option and fill in your address. Remember to leave your phone number so we can contact you.<br>
              (3) Place Order
              Click on Place Order and your order will be on its way to you.
              </p>


              <h2 class="section-heading mb-2 mt-4">
               
                <span class="section-heading-lower font-weight-bold">Customer Service</span>
              </h2>
              <p class="ml-4">Our customer service are always happy and eager to hear from you ; 7:00am – 9:00pm for every day.
              </p>

               <h2 class="section-heading mb-2 mt-4">
               
                <span class="section-heading-lower font-weight-bold">Installation Services</span>
              </h2>
              <p class="ml-4">We are free services of installation for any exercise equipment to YGN.
              </p>

              <h2 class="section-heading mb-2 mt-4">
               
                <span class="section-heading-lower font-weight-bold">Payment Terms & Services </span>
              </h2>
              <p class="ml-4">You can enjoy payment terms fully cash on delivery and any other online payment.
              Our payment method is among the easiest. We accept Cash on delivery & Bank Transfers.

              </p>

                
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 



      <!-- Footer 
      <footer class="sticky-footer">
        <div class="container-fluid my-auto">
          <div class="copyright text-center my-auto">
            <span></span>
          </div>
        </div>
      </footer>-->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper 

  </div>-->
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  

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
