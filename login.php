<?php
require_once('koneksi.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="js/jquery-3.5.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/dataTables.bootstrap4.min.css">
</head>
<body>

<div class="container vh-100">
		<div class="row justify-content-center h-100">
			<div class="card w-25 my-auto shadow">
				<div class="card-header text-center bg-danger text-white">
					<h2>Login form</h2>
				</div>
				<div class="card-body">
					<form action="proces.php" method="post">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="Email" class="form-control" name="Email" />
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" id="Password" class="form-control" name="Password" />
						</div>
						<input type="submit" class="btn btn-danger w-100" value="Login" name="">
					</form>
				</div>
				<div class="card-footer text-right">
					<small>&copy; KP4</small>
				</div>
			</div>
		</div>
</div>

</body>
</html>