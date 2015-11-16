<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Web media</title>
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
                <div clss="row page-header">
                    <div class="col-sm-12 ">
                        <h3 class="text-center">Web media Insert</h3>
                    </div>
                </div>
                <br>
                <hr>
                <hr>
                <div class="row ">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <form action="">
                                <div class="col-sm-2">
                                    <label for="mediaType">Meida Type</label>
                                    <select name="" class="form-control" id="mediaType">
                                        <option value="">Youtube</option>
                                        <option value="">Vimeo</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="webHead">Heading</label>
                                    <input type="text" class="form-control" id="webHead">
                                </div>
                                <div class="col-sm-2">
                                    <label for="videoID">Video ID</label>
                                    <input type="text" class="form-control" id="videoID">
                                </div>
                                <div class="col-sm-2">
                                    <label for="submit">Insert</label><br>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Insert</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 webMediaTable">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered">
                                <tr class="active">
                                    <th>Web Media Heading</th>
                                    <th>Video Number & Preview</th>
                                    <th class="text-center action" style="width:100px!important;">Action</th>
                                </tr>
                                <tr>
                                    <td>Top 10 Funny horrible moments in the world.</td>
                                    <td>
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZfckmv0avlByJT7FpsvXrGkAQH-qQeVgDShhWn_IVCy_K0gzmf2iQ5kle" alt="image">
                                    </td>
                                    <td class="text-center action" >
                                        <form action="">
                                            <button type="submit" class="btn btn-primary btn-sm"><i class="fa fa-check"></i> Update</button>
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