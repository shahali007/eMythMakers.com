<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Photo Gallery </title>
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
	<?php include_once("../common/header.php"); ?>
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				
				<?php include_once("../common/leftMenu.php"); ?>
				<div class="col-sm-10 col-xs-12 main-details">
					<div clss="row">
						<div class="col-sm-4 col-sm-offset-4">
							<h3 class="text-center">Photo Album</h3>
						</div>
						<div class="col-sm-4 text-right">
							<a href="insert-single.php" class="btn btn-sm btn-info quick-list"><i class="fa fa-reply-all"></i> &nbsp; Quick insert</a>
							<a href="list.php" class="btn btn-sm btn-info  quick-list"><i class="fa fa-reply-all"></i> &nbsp; List-views</a>
						</div>
					</div>
					<hr/><hr><hr>
					<form action="">
						<div class="row">
							<div class="col-sm-8 col-sm-offset-2">
								<div class="row">
									<div class="col-sm-12">
										<label for="AlbumName">Album Name</label>
										<input type="text" class="form-control" id="AlbumName">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="AlbumTag">Album Tag</label>
										<input type="text" class="form-control" id="AlbumTag">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="AlbumDescription">Album Description</label>
										<input type="text" class="form-control" id="AlbumDescription">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="PhotographerName">Photographer Name</label>
										<input type="text" class="form-control" id="PhotographerName">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="SelectImage">Select Image</label>
										<input type="file"  id="SelectImage">
										<i><small>Dimention Home Page: 240px X 140px (image must be smaller than 150) Dimention Slide: 480px X 306px (image must be smaller than 150)</small></i>
										<label for="ImageCaption">Image Caption</label>
										<input type="text" class="form-control" id="ImageCaption">
									</div>
								</div>
								<div class="row">	
									<div class="col-sm-12 text-center">
										<button type="submit" class="btn btn-primary "><i class="fa fa-check"></i> Insert</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<div class="row">
						<div class="col-sm-12">
							<div class="table-responsive">
								<table class="table table-hover table-bordered">
									<tr class="active">
										<th>ID</th>
										<th>Photo</th>
										<th>Image caption</th>
										<th class="td-time">Time/Date</th>
										<th class="text-center">Action</th>
									</tr>
									<tr>
										<th>01</th>
										<td>
											<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZfckmv0avlByJT7FpsvXrGkAQH-qQeVgDShhWn_IVCy_K0gzmf2iQ5kle" alt="image">
										</td>
										<td>
											<p>Image caption is here...</p>
										</td>
										<td>
											০২ নভেম্বর ২০১৫, ১৮ কার্তিক ১৪২২, ১৯ মহররম ১৪৩৭
										</td>
										<td class="text-center">
											<form action="">
												<button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"></i> Update</button>
												<button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
											</form>
										</td>
									</tr><!--/ end single news list -->
								</table>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>

<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	<script src="http://localhost:9000/eMythAdmin-backup/back/common/js/jquery-2.1.4.min.js"></script>
    <script src="http://localhost:9000/eMythAdmin-backup/back/common/js/bootstrap.min.js"></script>
	<script src="http://cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
</body>
</html>
