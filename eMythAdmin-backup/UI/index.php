<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dashboard</title>
	<!-- Latest compiled and minified bootstrap & font-awesome CDN CSS 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	-->
    <link href="http://localhost:9000/eMythAdmin-backup/UI/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost:9000/eMythAdmin-backup/UI/common/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost:9000/eMythAdmin-backup/UI/common/css/eMythMakers.css" rel="stylesheet">
</head>
<body>
<!-- facebook like script 
	<div id="fb-root"></div>
	<script>
	(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>
-->
	<!-- start header -->
	<?php include_once("common/header.php"); ?>
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<?php include_once("common/leftMenu.php"); ?>
				<div class="col-sm-10 col-xs-12 main-details">
					<div class="row">
						<div class="col-sm-12 text-center"><h3>Welcome to Dashbord</h3>
							<!-- start facebook like box html
							
							<div class="fb-page" data-href="https://www.facebook.com/jagonews24" data-height="450" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/jagonews24/"><a href="https://www.facebook.com/jagonews24/">gonews24.com</a></blockquote></div></div>
							
							 end facebook like box-->
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
		CKEDITOR.replace( 'detailsEditor' );
	</script>
</body>
</html>