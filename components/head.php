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
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
	
