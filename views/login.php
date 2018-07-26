<!DOCTYPE html>
<html>
<head>
	<title><?php echo "Log-in form"?></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
</head>
<body style="background-color: lightblue;">
	<br><br>
	<div class = "container">
		<div class = "col-md-3">
		<div class = "col-md-3">
		</div>
	</div>
		<div class = "col-md-6">
			<div class = "panel panel-info">
				<div class = "panel-heading">
					<div class="panel-title"> <h4>Log-in</h4></div>
				</div>
				<div class ="panel-body panel-pad">
				
					<form id="frmLogin">
					<div class = "input-group margT25">
						<span class = "input-group-addon">
							<i class = "glyphicon glyphicon-user"></i>
						</span>
						<input type="hidden" name="action" value = "login" id="login">
						<input type="text" class = "form-control" name = "username" id="logUsernmae" placeholder="username">
					</div>
					
				</div>
				<div class ="panel-body panel-pad">
					<div class = "input-group margT25">
						<span class = "input-group-addon">
							<i class = "glyphicon glyphicon-lock"></i>
						</span>
						<input type="password" class = "form-control" name = "password" id="logPassword" placeholder="password">
					</div>
				</div>
				<div class = "panel-body panel-pad">
				<div class = "form-group margT10">
				<div class="col-sm-12 controls"> 
								<button class="btn btn-info btn-block"  id="btnLogin"> Login</button> 
							</div> 
						</div> 
						<div class="form-group"> 
							<div class="col-md-12 control"> 
								<div class="no-acc"> 
									 
								</div>
								Don't have an account! 
									<a href="register.php" style="text-decoration: none;"> Sign Up Here </a>
							</div>
						</div>
					</div>
				</form>
</div>
<script src="../js/jquery.js"></script>
<script src="../js/functions.js"></script>
</body>
</html>