<!DOCTYPE html>
<html>
<head>
	<title>Ian Whitesel</title>
	<link rel="stylesheet" type="text/css" href="../static/css/main.css">
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
				<table>
					<tr>
						<td><h1><b><u>Ian Whitesel</u></b></h1>
						<img src="../static/images/ian-prof.jpg" alt="Ian Whitesel" height="192" width="256"></td>
					</tr>
					<tr>
						<td>
						<p><b>
						Please navigate around my site to view my different programming projects, or to find a way to contact me!
						</b></p>
						<h2><b><u>About Me</u></b></h2>
						<p>
						My name is Ian Whitesel, and I am a student at Kent State University in Ohio, USA.
						I am currently pursuing bachelor's degrees in Computer Science and in Criminal Justice, with have plans to graduate in December 2019. 
						From there I will go on to start work on a MED at Kent State University in Educational Technology.
						</p>
						<p>
						Programming and web design are great passions of mine. They combine the challenges of a puzzle, the intrigues of a good mystery,
						and allows me to express myself by turning abstract ideas into reality. Check out my projects tab to see what virtual concepts I have brought to life!
						</p>
						</td>
					</tr>
				</table>
	<!-- 
				<img src="../static/images/ian_turtle.jpeg" width="180" height="240"/>
				<p>My foster turtle Stewie, released back to the waters of Ohio on June 15, 2018</p>
	-->
			</div>
		</div>
		<div id="footer">
			<article>
				Find me online:
				<a target="_blank" rel="noopener noreferrer" href="https://twitter.com/altocgamedev"><img src="../static/images/twitter_logo.png" width="24" height="24"></a>
				<a target="_blank" rel="noopener noreferrer" href="https://github.com/Altoc"><img src="../static/images/github.png" width="24" height="24"></a>
				<a target="_blank" rel="noopener noreferrer" href="https://altoc.itch.io/"><img src="../static/images/itchio.jpg" width="24" height="24"></a>
				<a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/ian-whitesel-76ba40149/"><img src="../static/images/linkedin_logo.png" width="24" height="24"></a>
				Email: iwhitese@kent.edu
			</article>
		</div>
	</div>
</body>
</html>
