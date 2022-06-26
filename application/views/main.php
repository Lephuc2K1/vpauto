<!doctype html>
<html lang="vi-VN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$data['Title']?></title>
	<base href="<?=DOMAIN_NAME?>"/>
	
	<link rel="stylesheet" href="public/bootstrap-4.6.1-dist/css/bootstrap.min.css" >
        
	<link href="public/icons/pro/css/all.css" rel="stylesheet" type="text/css"/>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	
	<link href="public/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="public/css/icon.css" rel="stylesheet" type="text/css"/>
	<link href="public/css/responsive.css" rel="stylesheet" type="text/css"/>
	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	

	<script src="public/js/jquery-3.6.0.min.js"></script>
	<script src="public/bootstrap-4.6.1-dist/js/bootstrap.min.js"></script>
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

</head>
<?php
require_once("pages/header.php");

// thân giao diện
require_once(PATH_VIEWS.'pages/'.$data['Page'].".php");

require_once("pages/footer.php");
?>

<script src="public/js/script.js"></script>
<script src="public/js/jquery.js"></script>
<script src="public/js/scroll.js"></script>
