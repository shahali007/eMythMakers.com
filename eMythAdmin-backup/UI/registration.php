<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login | eMythMakers.com</title>
    <!-- Latest compiled and minified bootstrap & font-awesome CDN CSS
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    -->
    <link href="common/css/font-awesome.min.css" rel="stylesheet">
    <link href="common/css/bootstrap.min.css" rel="stylesheet">
    <link href="common/css/eMythMakers.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



</head>
<body>


	<!-- start registration  -->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 ">
				<form action="" method="POST">
					<h3>User Registration</h3>
					<span id='message'></span> <br />
					
					<div class="row">
						<div class="form-group">
							<div class="col-sm-4">
								<label for="U_name">Name<span style="color:red;">*</span></label>
							</div>
							<div class="col-sm-8">
								<input type="text" title="Username cannot be empty!" class="form-control" name="U_name" id="U_name" placeholder="Username" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-sm-4">
								<label for="U_email">Email<span style="color:red;">*</span></label>
							</div>
							<div class="col-sm-8">
								<input type="email" class="form-control" name="U_email" id="U_email" placeholder="Email required ">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-sm-4">
								<label for="password">Password<span style="color:red;">*</span></label>
							</div>
							<div class="col-sm-8">
								<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-sm-4">
								<label for="confirm_password">Confirm Password<span style="color:red;">*</span></label>
							</div>
							<div class="col-sm-8">
								<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
							<div class="col-sm-4">
								<label for="user-role">Select Role<span style="color:red;">*</span></label>
							</div>
							<div class="col-sm-8">
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
							<div class="col-sm-4 col-sm-offset-4">
								<button class="btn btn-primary">Registration</button>
							</div>
						</div>
					</div>
				</form>
            </div>
        </div>
    </div>
<!-- close registration  -->
	<!--
	jQuery (necessary for Bootstrap's JavaScript plugins)
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$('#confirm_password').on('keyup', function () {
			if ($(this).val() == $('#password').val()) {
				$('#message').html('<i class="fa fa-check"></i> Password matched!').css({"color": "green"});
			} else $('#message').html('not matching').css({"color": "red"});
		});
	</script>
</body>
</html>