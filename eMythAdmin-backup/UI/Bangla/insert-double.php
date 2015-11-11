<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Insert </title>
	<!-- Latest compiled and minified bootstrap & font-awesome CDN CSS 
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	-->
    <link href="http://localhost:9000/eMythAdmin-backup/UI/common/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost:9000/eMythAdmin-backup/UI/common/css/font-awesome.min.css" rel="stylesheet">
    <link href="http://localhost:9000/eMythAdmin-backup/UI/common/css/eMythMakers.css" rel="stylesheet">

    <style>
		.menuSearch:hover{color:#f7ae04;}
		#search-box{margin-top:19px;}
		.search-box{right:0;top:100%;padding:15px 75px 15px 15px;display:none;background:#fcfafb;position:absolute;box-shadow:5px 5px rgba(91, 91, 91, 0.2);margin-top:0;z-index:22;}
		.menusearch{cursor:pointer;padding:0 10px;}
    </style>
</head>
<body>
	<!-- start header -->
	<?php include_once("../common/header.php"); ?>
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				
				<?php include_once("../common/leftMenu.php"); ?>
				<div class="col-sm-10 col-xs-12 main-details">
					<div class="row">
						<div class="col-sm-4 col-sm-offset-4">
							<h3>Content - Insert (Bangla)</h3>
						</div>
						<div class="col-sm-4 ">
							<a href="list.php" class="btn btn-sm btn-info pull-right quick-list"><i class="fa fa-reply-all"></i> &nbsp; List views</a>
						</div>
					</div>
					<hr>
					<div class="row">
						<form action="">	
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12">
										<label for="SubHead">Sub-heading</label>
										<input type="text" class="form-control" id="SubHead">
									</div>
								</div>	
								<div class="row">
									<div class="col-sm-12">
										<label for="Head">Heading</label>
										<input type="text" class="form-control has-success" id="Head">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="Initial">Initial</label>
										<input type="text" class="form-control" id="Initial">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="BriefContent<">Brief Content</label>
										<textarea class="form-control" name="briefEditor" rows="3"id="BriefContent"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="DetailsContent<">Details Content</label>
										<textarea class="form-control" name="detailsEditor" rows="3"id="DetailsContent"></textarea>
									</div>
								</div>							
							</div>
							<div class="col-sm-6">
								<div class="row">
									<div class="col-sm-12">
										<label for="Writer">Writer</label>
										<input type="text" class="form-control" id="Writer">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<label for="Category">Category</label>
										<select name="" id="Category" class="form-control">
											<option value="">National</option>
											<option value="">International</option>
											<option value="">Economics</option>
											<option value="">Entertainment</option>
											<option value="">Sports</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label for="Position">Position(Home)</label>
										<select name="" id="Position" class="form-control">
											<option value="">Home</option>
											<option value="">Home Top</option>
											<option value="">Home Body</option>
											<option value="">Home bottom</option>
										</select>
									</div>
									<div class="col-sm-4">
										<label for="Position">Position(Inner)</label>
										<select name="" id="Position" class="form-control">
											<option value="">Home</option>
											<option value="">Home Top</option>
											<option value="">Home Body</option>
											<option value="">Home bottom</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="SubCategory">Sub Category</label>
										<select name="" id="SubCategory" class="form-control">
											<option value="">National</option>
											<option value="">International</option>
											<option value="">Economics</option>
											<option value="">Entertainment</option>
											<option value="">Sports</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="Position">Position(Sub)</label>
										<select name="" id="Position" class="form-control">
											<option value="">Home</option>
											<option value="">Home Top</option>
											<option value="">Home Body</option>
											<option value="">Home bottom</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label for="SpecialCategory">Special Category</label>
										<select name="" id="SpecialCategory" class="form-control">
											<option value="">National</option>
											<option value="">International</option>
											<option value="">Economics</option>
											<option value="">Entertainment</option>
											<option value="">Sports</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="SpecialPosition">Position(Special Category)</label>
										<input type="text" class="form-control" id="Writer">
									</div>
								</div>								
								<div class="row">
									<div class="col-sm-12">
										<label for="ImageSmall">Image (Small):</label><br />
											<small>
												<i>Dimention Home Page: 240px X 140px
												(image must be smaller than 150)
												Dimention Slide: 480px X 306px
												(image must be smaller than 150)
												</i>
											</small>
										
										<input type="file" >
										<input type="text" class="form-control" id="ImageSmall" placeholder="Image (Small) caption">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="ImageBig">Image (Big):</label><br />
											<small>
												<i>Dimention Details Page: maximum width 700px
												(image must be smaller than 150)
												</i>
											</small>
										
										<input type="file" >
										<input type="text" class="form-control" id="ImageBig" placeholder="Image (Big) caption">
									</div>
								</div>
								<br />
								<div class="row">
									<div class="col-sm-6">
										<div class="well well-sm">
											<label for="">Publish : </label>&nbsp;&nbsp;&nbsp;
											<label for="publish-yes"><input type="radio" name="publish" id="publish-yes" /> Yes</label>&nbsp;&nbsp;
											<label for="publish-no"><input type="radio" name="publish" id="publish-no" /> No</label>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="well well-sm">
											<label for="">Scroll : </label>&nbsp;&nbsp;&nbsp;
											<label for="scroll-yes"><input type="radio" name="scroll" id="scroll-yes" />Yes</label>&nbsp;&nbsp;
											<label for="scroll-no"><input type="radio" name="scroll" id="scroll-no" />No</label>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-4">
										<label for="Previous-ID">Previous content ID</label>
										<input type="text" class="form-control" id="Previous-ID">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="Tags">Tags</label>
										<input type="text" class="form-control" id="Tags">
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<label for="MetaKeywords">Meta keywords</label>
										<input type="text" class="form-control" id="MetaKeywords">
									</div>
								</div>
								<div class="row">	
									<div class="col-sm-12">
										<button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Insert</button>
									</div>
								</div>
							</div>
						</form>
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
		CKEDITOR.replace( 'briefEditor' );
		CKEDITOR.replace( 'detailsEditor' );
	</script>
	<script>
	    $("#search-box").click(function(){$(".search-box").toggle();});
	</script>

</body>
</html>