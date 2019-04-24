<?php
	session_start();
	include("dbconnect.php");

	if(isset($_POST["date"]) && isset($_POST["message"])){
		if($_POST["message"] != ""){
			$date = $_POST['date'];
			$message = $_POST['message'];
			$game = $_SESSION['title'];
			$query = "INSERT INTO game_review_comments (game,date,message) VALUES ('$game','$date','$message')";
			$sql = mysqli_query($DB, $query);
		}
	}
	header("Location: ./review.php");
?>
