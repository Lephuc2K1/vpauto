<!doctype html>
<html lang="vi-VN">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?=$data['Title']?></title>
	<base href="<?=DOMAIN_NAME?>"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet" />
	
	<link href="public/icons/fontawesome-pro-5.13.0-web/css/all.css" rel="stylesheet"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	
	<link href="public/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="public/css/icon.css" rel="stylesheet" type="text/css"/>
	
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="public/js/jquery-3.6.0.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

</head>
<body>
	<?php require_once(PATH_VIEWS.'Pages/'.$data['Page'].".php"); ?>
</body>
<script src="public/js/script.js"></script>
</html>
