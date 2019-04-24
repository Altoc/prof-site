<?php
	session_start();
	include("dbconnect.php");
  
  $password = $_POST['password'];
  $pass_query = "SELECT password FROM session";
  $pass_sql = mysqli_query($DB, $pass_query);
  $row = mysqli_fetch_assoc($pass_sql);
  
  if($row['password'] == $password){
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
  	$date		=	date("Y-m-d H:i:s");
	
  	$query 		= "INSERT INTO game_reviews " .
  		"(title,console,completed,plot,visual,sound,feel,design,bias,overall,date) " .
  		"VALUES " .
  		"('$title','$console','$completed','$plot','$visual','$sound','$feel','$design','$bias','$overall','$date')";
  	$sql = mysqli_query($DB, $query);
  }

	header("Location: game_reviews.php");
	exit;
?>