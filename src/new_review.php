<?php
	session_start();
	include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ian Whitesel | New Review </title>
	<!-- <link rel="stylesheet" type="text/css" href="../static/css/review.css"> -->
	<link rel="icon" href="../static/images/favicon.png"> <!-- favicon -->
</head>
<body>
  <div>
		<table>
			<form action='dbnew_review.php' method='post'>
				<tr>title<br><input type='text' name='title'></tr>
				<br>
				<tr>console<br><input type='text' name='console'></tr>
				<br>
				<tr>completed? (0 or 1)<br><input type='text' name='completed'></tr>
				<br>
				<tr>plot<br><textarea name="plot" rows="10" cols="50" maxlength="2000"></textarea></tr>
				<br>
				<tr>visual<br><textarea name="visual" rows="10" cols="50" maxlength="2000"></textarea></tr>
				<br>
				<tr>sound<br><textarea name="sound" rows="10" cols="50" maxlength="2000"></textarea></tr>
				<br>
				<tr>feel<br><textarea name="feel" rows="10" cols="50" maxlength="2000"></textarea></tr>
				<br>
				<tr>design<br><textarea name="design" rows="10" cols="50" maxlength="2000"></textarea></tr>
				<br>
				<tr>bias<br><textarea name="bias" rows="10" cols="50" maxlength="2000"></textarea></tr>
				<br>
				<tr>overall (1-10)<br><input type='text' name='overall'></tr>
				<br>
				<tr>password<br><input type='text' name='password'></tr>
				<br>
				<tr>
					<br><h3>REPLACE ALL SINGLE ' WITH TWO '' !!!!</h3>
					<br><br><input type='submit' value='Submit'>
				</tr>
			</form>
		</table>
  </div>
</body>
</html>