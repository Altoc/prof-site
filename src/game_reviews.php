<?php
	session_start();
	include("dbconnect.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ian Whitesel | Game Reviews</title>
	<!-- <link rel="stylesheet" type="text/css" href="../static/css/game_reviews.css"> -->
	<link rel="icon" href="../static/images/favicon.png"> <!-- favicon -->
</head>
<body>
	<div id="banner">
		Game Reviews <form action='new_review.php' method='post'><input type='submit' value='New Review'></form>
	</div>
	<div id="main">
		<div id="reviews">
			<table>
				<th>Console</th><th>Title</th><th>Date</th>
				<?php
					$query = "SELECT title,console,overall,date FROM game_reviews";
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
			</table>
		</div>
	</div>
</body>
</html>