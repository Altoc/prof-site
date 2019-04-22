<?php
	session_start();
	include("dbconnect.php");

	$title		=	$_POST['title'];
	$console	=	$_POST['console'];
	$completed	=	$_POST['completed'];
	$plot		=	$_POST['plot'];
	$visual		=	$_POST['visual'];
	$sound		=	$_POST['sound'];
	$feel		=	$_POST['feel'];
	$design		=	$_POST['design'];
	$bias		=	$_POST['bias'];
	$overall	=	$_POST['overall'];
	$date		=	$_POST['date'];
	
	$query 		= "INSERT INTO game_reviews " . 
		"(title,console,completed,plot,visual,sound,feel,design,bias,overall,date) " . 
		"VALUES " . 
		"('$title','$console','$completed','$plot','$visual','$sound','$feel','$design','$bias','$overall','$date')";
	$sql = mysqli_query($DB, $query);
	header("Location: game_reviews.php");
	exit;
?>