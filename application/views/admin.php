<!doctype html>
<html lang="vi-VN">
<head>
<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$data['Title']?></title>
	<base href="<?=DOMAIN_NAME?>"/>
	<link href="public/css/admin/style.css" rel="stylesheet"/>
	
	<link href="public/icons/fontawesome-pro-5.13.0-web/css/all.css" rel="stylesheet"/>
	<link rel="stylesheet" href="public/bootstrap-4.6.1-dist/css/bootstrap.min.css" >
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="public/bootstrap-4.6.1-dist/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
	require_once(PATH_VIEWS."admin/theme-header.php");
	?>
	<section class="main" style="
    background: #f2f2f2;">
			 
<!--			menu-->
				<?php
				require_once(PATH_VIEWS."admin/theme-menu.php");
				?>
	<!--	 NỘI DUNG THÌ CHÈN FILE NỘI DUNG VÀO -->
			<?php require_once(PATH_VIEWS.'admin/'.$data['Page'].".php"); ?>

	
</body>
		<!--	trình sửa nội dung conten-->
<!--		<script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>-->
	<script src="https://cdn.ckeditor.com/4.17.1/full/ckeditor.js"></script>
	<script>
         CKEDITOR.replace( 'content' );
         CKEDITOR.replace( 'short-content' );
    </script>
	<script src="admin/js/product.js"></script>
	<script src="admin/js/function.js"></script>
	<script src="admin/js/ajax.js"></script>
	
</html>
