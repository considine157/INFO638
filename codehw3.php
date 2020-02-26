<!DOCTYPE html>
<html>
<head>
<title>Code Homework #2</title>
<link rel="stylesheet" type="text/css" href="mycss3.css">
</head>
<body>

<h1>Code Homework #3</h1>
<h2>Challenge 1: Book lists</h2>
<p>This is my work.</p>

<?php
# Creating a multidemensional array for the Books and their characteristics.

$totalbooks = array(
	array("Book"=>"PHP and MySQL Web Development", "Author"=>"Luke Welling","Pages"=>"144","Format"=>"Paperback", "Price"=>"31.63"),
	array("Book"=>"Web Design with HTML, CSS, JavaScript and jQuery", "Author"=>"John Duckett", "Pages"=>"135","Format"=>"Paperback","Price"=>"41.23"),
	array("Book"=>"PHP Cookbook: Solutions & Examples for PHP Programmers", "Author"=>"David Sklar", "Pages"=>"14","Format"=>"Paperback","Price"=>"40.88"),
	array("Book"=>"JavaScript and jQuery: Interactive Front-End Web Development", "Author"=>"Jon Duckett", "Pages"=>"251","Format"=>"Paperback","Price"=>"22.09"),
	array("Book"=>"Modern PHP: New Features and Good Practices", "Author"=>"Josh Lockhart", "Pages"=>"7","Format"=>"Paperback","Price"=>"28.49"),
	array("Book"=>"Programming PHP", "Author"=>"Kevin Tatroe", "Pages"=>"26","Format"=>"Paperback","Price"=>"28.96")
);


#Creating a table for the array information.

echo "<div class = border>
	<table><tr><td>Title</td><td>Author</td><td>Pages</td><td>Format</td><td>Price</td></tr>";
foreach ($totalbooks as $books){
		echo "<tr>";
		foreach ($books as $key)
		{
			echo '<td>'.$key. '</td>';
		}
		echo '</tr>';
	}
echo '</table></div>';

#Creating total price for all books.

$totalprice = (31.63+41.23+40.88+22.09+28.49+28.96);
echo '<p>';
echo "Your total price is $totalprice.";
echo '</p>';

?>



<h2>Challenge 2: Coin Toss, continued</h2>
<p>This is my work.</p>
<?php


# Create variables for coin toss game. 50 tosses total.

$numtosses = 50;
$heads = 0;
$tails=0;
$coin = 0;
$count = 0;

#Create a loop that prints the total number of heads and tails in a coin toss of 50.

for ($i = 0; $i <50; $i++){
	$coin = mt_rand(0,1);
	if ($coin == 0){
		echo "<img src='heads.jpg'><p>";
		
		$heads += 1;
		$count += 1;

	}else if ($coin == 1){
		echo "<img src='tails.jpg'><p>";
		
		$tails += 1;
		$count += 1;


}
}


echo '<p>';	
echo "Flipped heads $heads in a row in $numtosses.";
echo '</p>';
echo '<p>';
echo "Flipped tails $tails in a row in $numtosses.";
echo '</p>';
	
?>



</body>
<footer>&copy Zane Castillo, 2020</footer>
</html>