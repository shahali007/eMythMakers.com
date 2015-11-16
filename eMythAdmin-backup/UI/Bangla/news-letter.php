<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>News Letter </title>
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
		        	<div class="row news-letter">
				        <div class="dual-list list-left col-sm-5 col-sm-offset-1">
				            <div class="well text-right">
				                <div class="row">
				                    <div class="col-sm-10">
				                        <h4>Table 1</h4>
				                    </div>
				                    <div class="col-sm-2">
				                        <div class="btn-group">
				                            <a class="btn btn-default selector" title="select all"><i class="fa fa-square-o"></i></a>
				                        </div>
				                    </div>
				                </div>
				                <ul class="list-group">
				                    <li class="list-group-item">Dapibus ac facilisis in</li>
				                    <li class="list-group-item">Morbi leo risus</li>
				                    <li class="list-group-item">Porta ac consectetur ac</li>
				                    <li class="list-group-item">Vestibulum at eros</li>
				                </ul>
								<div class="list-arrows">
					                <button class=" btn btn-default btn-sm move-right">
						                <i class="fa fa-angle-right"></i>
						            </button>
					            </div>
				            </div>
				        </div>
				        <div class="dual-list list-right col-sm-5">
				            <div class="well">
				                <div class="row">
				                    <div class="col-sm-2">
				                        <div class="btn-group">
				                            <a class="btn btn-default selector" title="select all"><i class="fa fa-square-o"></i></a>
				                        </div>
				                    </div>
				                    <div class="col-sm-10">
				                        <h4>Table 2</h4>
				                    </div>
				                </div>
				                <ul class="list-group">
				                    <li class="list-group-item">Cras justo odio</li>
				                    <li class="list-group-item">Dapibus ac facilisis in</li>
				                    <li class="list-group-item">Morbi leo risus</li>
				                    <li class="list-group-item">Porta ac consectetur ac</li>
				                    <li class="list-group-item">Vestibulum at eros</li>
				                </ul>
				                <div class="list-arrows">
						            <button class="btn btn-default btn-sm move-left">
						                <i class="fa fa-angle-left"></i>
						            </button>
						        </div>
				            </div>
				        </div>
					</div><!-- close row-->
					<hr>

   				</div>
			</div>
		</div>
	</div>

	<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	<script src="http://localhost:9000/eMythAdmin-backup/UI/common/js/jquery-2.1.4.min.js"></script>
    <script src="http://localhost:9000/eMythAdmin-backup/UI/common/js/bootstrap.min.js"></script>
	<script src="http://cdn.ckeditor.com/4.5.4/full/ckeditor.js"></script>
	<script>
        $(function () {

            $('body').on('click', '.list-group .list-group-item', function () {
                $(this).toggleClass('active');
            });
            $('.list-arrows button').click(function () {
                var $button = $(this), actives = '';
                if ($button.hasClass('move-left')) {
                    actives = $('.list-right ul li.active');
                    actives.clone().appendTo('.list-left ul');
                    actives.remove();
                } else if ($button.hasClass('move-right')) {
                    actives = $('.list-left ul li.active');
                    actives.clone().appendTo('.list-right ul');
                    actives.remove();
                }
            });
            $('.dual-list .selector').click(function () {
                var $checkBox = $(this);
                if (!$checkBox.hasClass('selected')) {
                    $checkBox.addClass('selected').closest('.well').find('ul li:not(.active)').addClass('active');
                    $checkBox.children('i').removeClass('fa-square-o').addClass('fa-check-square-o');
                } else {
                    $checkBox.removeClass('selected').closest('.well').find('ul li.active').removeClass('active');
                    $checkBox.children('i').removeClass('fa-check-square-o').addClass('fa-square-o');
                }
            });
        });
	</script>
</body>
</html>