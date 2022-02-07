<!DOCTYPE html>
<html>
<head>
	<title>User Login And Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<body class="bg-info">
<div class="container">
		
		<h1 class="text-center mt-5 pt-3">Login Here</h1>
        <div class=" row mt-4 justify-content-center">

			<form action="validation.php" method="post" class="col-md-6" enctype="multipart/form-data">
		
              <div class="form-group mb-3">
                  <label  class="text-white">User Name</label>
                  <input type="text" name="user" class="form-control" placeholder="Username" required>
              </div>

                  <div class="form-group mb-3">
                  <label  class="text-white">Password</label>
                  <input type="password" name="password"  class="form-control" placeholder="Password" requied>
              	</div>

					<div class="form-group mb-3">
                 <button type="submit" class="btn btn-success mt-4">Login</button>
                 <a href="index.php" class="btn btn-success ml-3 mt-4">Home</a>
                   <!--<a href="signin.php" class=" ml-2 mt-2">Sigin Up</a>  -->
               </div>
             </form>
         </div>

</body>
</html>