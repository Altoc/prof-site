<?php
$servername = "localhost";  // if you run on local server the name is "localhost:3306".
$username = "altofaus";
$password = "Mezcal12345";
$dbname = "altofaus_ian_db";
$DB;
$DB = @new mysqli($servername, $username, $password, $dbname);
//Test to see if connection was successful
 if(!$DB){
    die('Connection to DB Failed') . mysqli_error($DB);
}
?>