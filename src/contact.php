<!DOCTYPE html>
<html>
<head>
	<title>Ian Whitesel | Contact</title>
	<link rel="stylesheet" type="text/css" href="../static/css/contact.css">
	<link rel="icon" href="../static/images/favicon.png"> <!-- favicon -->
	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet"> <!-- Space Mono Font -->
	<script>
		window.onload = function (){
		  document.getElementById("button_Portfolio").onclick = function () {window.location.href='./portfolio.php'};
		  document.getElementById("button_ContactUs").onclick = function () {window.location.href='./contact.php'};
		  document.getElementById("button_Home").onclick = function () {window.location.href='./home.php'};
		  document.getElementById("button_GameReview").onclick = function () {window.location.href='./game_reviews.php'};
		}
	</script>
</head>
<body>
	<?php include("banner.php"); ?>
	
	<div id="main">
		<div id="page_container">
			<div id="content">
				<div id="footer">
					<article>
						<h2>Find me online:
						<a target="_blank" rel="noopener noreferrer" href="https://twitter.com/altocgamedev"><img src="../static/images/twitter_logo.png" width="24" height="24"></a>
						<a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc"><img src="../static/images/github.png" width="24" height="24"></a>
						<a target="_blank" rel="noopener noreferrer" href="https://altoc.itch.io/"><img src="../static/images/itchio.jpg" width="24" height="24"></a>
						<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/ian-whitesel-76ba40149/"><img src="../static/images/linkedin_logo.png" width="24" height="24"></a>
					</article>
				</div>
				<div>
					<h2>Email: 'iwhitese@kent.edu'.</h2>
					<p>Please include name and reason for contact!</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
