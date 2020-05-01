<!DOCTYPE html>
<html>
<head>
<title>Search Anime Table</title>
<style>

/*#CSS for my table.*/
table {
	border-collapse: collapse;
	margin: 10px;
}
table, tr, th, td {
	border: 1px solid #000;
}

/*#CSS for my Form label.*/
label[for=anime_title] {
	color: yellow;
	padding-right: 10px;
	padding-left: 10px;

}

/*#CSS for my Form input.*/
input[type=text] {
	width: 200px;
}
</style>
</head>
<body>
<?php

#Require login credentials to access page and allow user to submit information but output "Database access denied" if incorrect.
require_once 'login.php';
if (isset($_GET['submit'])) {
	if (empty($_GET['anime_title'])) {
		echo "<p>Please fill out this field!</p>";
	} else {
		#Connect to database with login credentials.
		$connection = new mysqli($hn, $un, $pw, $db);
		if ($connection->connect_error) die($connection->connect_error);
		$anime_title = sanitizeMySQL($connection, $_GET['anime_title']);
		#Search the anime table for anime titles and also using '%' to find letters/characters similar to what is entered.
		$search = "SELECT * FROM anime WHERE anime_title LIKE '%$anime_title%'";
		$result = $connection->query($search);
		if (!$result) {
			die ("Database access denied: " . $connection->error);
		} else {
			$rows = $result->num_rows;
			if ($rows) {
				echo "<h1>Results</h1><table><tr><th>anime_id</th><th>anime_title</th><th>company_id</th><th>release_date</th><th>anime_format</th></tr>";
				while ($row = $result->fetch_assoc()) {
					echo "<tr>";
					echo "<td>".$row["anime_id"]."</td><td>".$row["anime_title"]."</td><td>".$row["company_id"]."</td><td>".$row["release_date"]."</td><td>".$row["anime_format"]."</td>";
					echo "</tr>";
				}
				echo "</table>";
			} else {
				echo "<p>No anime with that title!</p>";
			}
			echo "<h2>Search Again</h2>";
		}
	}
}

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
<!-- #Here is my Form to search the database for an anime title. -->
<form action="search2.php" method="get">
		<label for="anime_title">Anime Title:</label>
		<input type="text" name="anime_title" required>
		<input type="submit" name="submit" value='Submit'>
</form>
</body>
</html>