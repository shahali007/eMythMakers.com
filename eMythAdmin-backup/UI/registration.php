<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Registation</title>
	<!-- Latest compiled and minified bootstrap & font-awesome CDN CSS 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	-->
    <link href="http://localhost:9000/eMythAdmin-backup/UI/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost:9000/eMythAdmin-backup/UI/common/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost:9000/eMythAdmin-backup/UI/common/css/eMythMakers.css" rel="stylesheet">
</head>
<body>

	<!-- start header -->
	<?php include_once("common/header.php"); ?>
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<?php include_once("common/leftMenu.php"); ?>
				<div class="col-sm-10 col-xs-12 main-details">
		        	<div class="row">
		            <div class="col-sm-4 col-sm-offset-1 ">
						<form action="" method="POST">
							<h3>User Registration</h3>
							
							
							<div class="row">
								<div class="form-group">
									<div class="col-sm-12">
										<label for="U_name">Name<span style="color:red;">*</span></label>
										<input type="text" title="Username cannot be empty!" class="form-control" name="U_name" id="U_name" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-sm-12">
										<label for="U_email">Email<span style="color:red;">*</span></label>
										<input type="email" class="form-control" name="U_email" id="U_email" required >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-sm-12">
										<label for="password">Password<span style="color:red;">*</span></label>
										<input  type="password" title="Please enter the Password." class="form-control" name="password" id="password" onchange=" this.setCustomValidity(this.validity.patternMismatch ? this.title : '');	if(this.checkValidity())form.confirm_password.pattern = this.value;" required/>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-sm-12">								
										<label for="confirm_password">Confirm Password<span style="color:red;">*</span></label>
										&nbsp;<span id="message"></span>
										<input title="Please enter the same Password as above" type="password" class="form-control" name="confirm_password" id="confirm_password" onchange="this.setCustomValidity(this.validity.patternMismatch ? this.title : '');" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-sm-12">
										<label for="user-role">Select Role<span style="color:red;">*</span></label>
										<select class="form-control">
											<option value="">Admin</option>
											<option value="">Manager</option>
											<option value="">Operator</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-sm-12">
										<button class="btn btn-default registration-btn">Registration</button>
									</div>
								</div>
							</div>
						</form>
		            </div>
		        	</div>
   				</div>
			</div>
		</div>
	</div>

	<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	<script src="http://localhost:9000/eMythAdmin-backup/UI/common/js/jquery-2.1.4.min.js"></script>
    <script src="http://localhost:9000/eMythAdmin-backup/UI/common/js/bootstrap.min.js"></script>
	<script src="http://cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
	<script>
		$('#confirm_password').on('keyup', function () {
			if ($(this).val() == $('#password').val()) {
				$('#message').html('<i class="fa fa-check"></i> Password matched!').css({"color": "green"});
			} else $('#message').html('<i class="fa fa-close"></i> Password not matching').css({"color": "red"});
		});
	</script>
</body>
</html>