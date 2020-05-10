<!DOCTYPE html>
<html>
<head>
<title>View Anime Page</title>
</head>
<body>
<?php

#Includes for my page.
include_once 'header.php';
require_once 'login.php';

#Connect to database with login credentials.
$connection = new mysqli($hn, $un, $pw, $db); 
if ($connection->connect_error) die($connection->connect_error);

#Search the anime table for anime titles and also using '%' to find letters/characters similar to what is entered.
if (isset($_GET['anime_title'])) {
	$anime_title = sanitizeMySQL($connection, $_GET['anime_title']);
	$search = "SELECT * FROM anime WHERE anime_title LIKE  '%$anime_title%'";
	$result = $connection->query($search);
	if (!$result) die ("Invalid anime title.");
	$rows = $result->num_rows;
	if ($rows == 0) {
		echo "No anime found with that anime title<br>";
	} else {
		while ($row = $result->fetch_assoc()) {
			echo '<h3 style="color:crimson;">Anime Information</h3>';
			echo $row["anime_title"]." was released on ".$row["release_date"]." and it is a ".$row["anime_format"], ".";		
		}
	}
	echo "<p><a href=\"index.php\">Return to homepage</a></p>";
} else {
	echo "No anime title found.";
}

# Include for footer page.
include_once 'footer.php';

#Here I am calling these functions for security for a user's data that is submitted amd for my MYSQL database.
function sanitizeString($var)
{
	$var = stripslashes($var);
	$var = strip_tags($var);
	$var = htmlentities($var);
	return $var;
}
function sanitizeMySQL($connection, $var)
{
	$var = sanitizeString($var);
	$var = $connection->real_escape_string($var);
	return $var;
}
?>
</body>
</html>