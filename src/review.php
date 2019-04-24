<?php
	session_start();
	include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<?php
		if(isset($_POST['title'])){
			$title = $_POST['title'];
			$_SESSION['title'] = $title;
		} else {
			$title = $_SESSION['title'];
		}

		$query = "SELECT * FROM game_reviews WHERE title='$title'";
		$sql = mysqli_query($DB, $query);
		$row = mysqli_fetch_assoc($sql);
	?>
	<title>Ian Whitesel | <?php echo($title); ?></title>
	<!-- <link rel="stylesheet" type="text/css" href="../static/css/review.css"> -->
	<link rel="icon" href="../static/images/favicon.png"> <!-- favicon -->
<style>
	#comment_section{
		height: 50vh;
		overflow-y: auto;
	}
</style>
</head>
<body>
	<div id="banner">
		<?php echo("Title: " . $row['title'] . " | Console: " . $row['console'] . " | Overall: " . $row['overall'] . "/10"); ?>
	</div>
	<div id="main">
		<div id="bias">
			<h2>My Bias Going In</h2>
			<?php echo($row['bias']); ?>
		</div>
		<div id="completed">
			<h2>Did I Beat It?</h2>
			<?php
				if($row['completed'] == 1){
					echo("I did complete this game.");
				} else {
					echo("I did not complete this game.");
				}
			?>
		</div>
		<div id="plot">
			<h2>Plot</h2>
			<?php echo($row['plot']); ?>
		</div>
		<div id="visual">
			<h2>Visuals</h2>
			<?php echo($row['visual']); ?>
		</div>
		<div id="sound">
			<h2>Sound</h2>
			<?php echo($row['sound']); ?>
		</div>
		<div id="feel">
			<h2>Gameplay Feel</h2>
			<?php echo($row['feel']); ?>
		</div>
		<div id="design">
			<h2>Gameplay Design</h2>
			<?php echo($row['design']); ?>
		</div>
		<div id="comment_section">
			<h2>COMMENTS</h2>
			<br>
			Leave a Comment here
			<form action="dbreview_comment.php" method="post">
				<textarea name="message" rows="10" cols="50" maxlength="500"></textarea>
				<input type="hidden" name="date" value=<?php $date = date('Y-m-d H:i:s'); echo("'" . $date . "'");?>>
				<br><input type="submit" value="Submit">
			</form>
			<?php
				$query 	= "SELECT * FROM game_review_comments WHERE game='$title'";
				$sql 	= mysqli_query($DB, $query);
				while($row = mysqli_fetch_assoc($sql)){
					echo($row['date'] . "<br>" . $row['message'] . "<br><br>");
				}
			?>
		</div>
	</div>
</body>
</html>
