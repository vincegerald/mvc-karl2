<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo "Registration Form" ?></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<br>
<br>
<body style="background-color: lightblue;">
	<div class="container">
<div class="row">
	<!-- 3 GRIDS -->
	<div class="col-md-3">
		
	</div>
	<!-- 6 GRIDS -->
	<div class="col-md-6">
		<div class="panel panel-info" >
		<div class="panel-heading">
			<h4>Registration Form</h4>
		</div>
		<div class="panel-body">
			<form id = "frmRegister">
				<center>
					<input type="hidden" name = "action" value = "register">
					<input class="form-control" type="text" name="txtname" placeholder="Name" ><br>
					<select class="form-control" name="txttype">
						<option selected disabled>Select Type</option>
						<option>admin</option>
						<option>client</option>
					</select><br>
					<input class="form-control" type="text" name="txtusername" placeholder="Username"><br>  
					<input class="form-control" type="password" name="txtpassword" placeholder="Password"><br>
					<input class="form-control" type="password" name="txtconfirmpassword" placeholder="Confirm Password"><br>
				</center>
				<div class="col-md-12 ">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<button class="btn btn-danger" id="btnRegister" style="width: 290px;"><i class="glyphicon glyphicon-registration-mark"></i> Register</button><br>
						already have an account? click <a href="login.php" style="text-decoration: none;">here</a>
					</div>
					
				</div>
			</form>
		</div>
	</div>
	</div>
	<!-- 3 GRIDS -->
	<div class="col-md-3">
		
	</div>
</div>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/functions.js"></script>

</body>
</html>