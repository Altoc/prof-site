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
  <div>
      <table>
        <form action='dbnew_review.php' method='post'>
        <tr>
          <td>title<input type='text' name='title'>console<input type='text' name='console'><!--completed?<input type='text' name='console'>--></td>
        </tr>
        <tr>
          <td>plot<textarea name="plot" rows="5" cols="25" maxlength="500"></textarea>visual<textarea name="visual" rows="5" cols="25" maxlength="500"></textarea>sound<textarea name="sound" rows="5" cols="25" maxlength="500"></textarea></td>
        </tr>
        <tr>
          <td>feel<textarea name="feel" rows="5" cols="25" maxlength="500"></textarea>design<textarea name="design" rows="5" cols="25" maxlength="500"></textarea>bias<textarea name="bias" rows="5" cols="25" maxlength="500"></textarea></td>
        </tr>
        <tr>
          <td>overall (1-10)<input type='text' name='overall'>password<input type='text' name='password'><input type='submit' value='Submit'></td>
        </tr>
        </form>
      </table>
  </div>
</body>
</html>