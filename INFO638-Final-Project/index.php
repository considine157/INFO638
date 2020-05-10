<!DOCTYPE html>
<html>
<head>
<title>Index Page</title>
</head>
<body>
<?php
# Includes for both my header and login page.
include_once 'header.php';
require_once 'login.php';

#Connect to database with login credentials.

$connection = new mysqli($hn, $un, $pw, $db);
if ($connection->connect_error) die($connection->connect_error);

#Here I will do a search/query in the anime table to retrieve all of the fields in a table.
$search = "SELECT * FROM anime";
$result = $connection->query($search);
if (!$result) die ("Database access failed: " . $connection->error);
$rows = $result->num_rows;

# Table created with headers to house three fields: 'anime_title', 'release_date', and 'anime_format.'
echo "<table><tr><th>Anime Title</th><th>Release Date</th><th>Anime Format</th></tr>";
while ($row = $result->fetch_assoc()) {
	echo '<tr style="color:white;">';
	echo "<td><a href=\"viewanime.php?anime_title=".$row["anime_title"]."\">".$row["anime_title"]."</a>";
	echo "</td><td>".$row["release_date"]."</td><td>".$row["anime_format"]."</td>";		
	echo '</tr>';
}
echo "</table>";

#Here I add a require for my search2 page where the user can search the database.

require_once 'search2.php';

# Include for footer page.
include_once 'footer.php';
?>
</body>
</html>