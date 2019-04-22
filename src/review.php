<?php
	session_start();
	include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ian Whitesel | <?php echo($_POST['title']); ?></title>
	<!-- <link rel="stylesheet" type="text/css" href="../static/css/review.css"> -->
	<link rel="icon" href="../static/images/favicon.png"> <!-- favicon -->
	<?php
		$query = "SELECT * FROM game_reviews WHERE title='" . $_POST['title'] . "'";
		$sql = mysqli_query($DB, $query);
		$row = mysqli_fetch_assoc($sql);
	?>
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
	</div>
	<div id="comments">
		<div id="new_comment">
			<form action="new_comment.php" method="post">
				<textarea name="comment" rows="10" cols="50" maxlength="500">
				<input type="submit" value="Submit">
			</form>
		</div>
		<div id="old_comments">
			<?php
				<?php
					$query = "SELECT * FROM game_review_comments WHERE game";
					$Array = mysqli_query($DB, $query);
					while($row = mysqli_fetch_assoc($Array)){
						echo("<tr>" . 
							"<td>" . $row['console'] . "</td>" . 
							"<td>" . $row['title'] . "</td>" . 
							"<td>" . $row['overall'] . "/10</td>" . 
							"<td>" . $row['date'] . "</td>" . 
							"<td><form action='review.php' method='post'><input type='hidden' name='title' value='" . $row['title'] . "'>" . 
							"<input type='submit' value='Read Review'></form></td>" . 
							"</tr>");
					}
				?>
			?>
		</div>
	</div>
</body>
</html>