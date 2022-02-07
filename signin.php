<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
	<div class="login-box">
		<div class="row justify-content-center">
			<div class="col-md-6 login-right">
				<h2> Register Here </h2>
				<form action="registration.php" method="post">
					<div class="form-group">
						<label> Username</label>
						<input type="text" name="user" class="form-control" required>
					</div>

					<div class="form-group">
						<label> Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
						<button type="submit" class="btn btn-primary"> Register </button>
						<a href="login.php" class=" ml-2 mt-2">Login</a>
				</form>
			</div>
		</div>
	</div>
</div>

</body>
</html>