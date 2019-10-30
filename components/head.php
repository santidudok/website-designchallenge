<?php
	$link = $_SERVER['PHP_SELF'];
	$link2 = explode('/', $link)[2];
	$link3 = explode('.', $link2)[0];
	
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $link3; ?></title>
	<link rel="shortcut icon" type="icon" href="media/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
	<link href="netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<script src="https://kit.fontawesome.com/4cfd5e5ec5.js" crossorigin="anonymous"></script>
</head>
<body>
	
