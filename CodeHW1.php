<!DOCTYPE html>
<html>
<head>
</head>
<body>
<title>Code Homework # 1</title>
<style>
	body{
		background-color: pink;
		font-family: Helvetica;
		text-align: center;
}

 	 div{
 		background-color: yellow;
 		font-family: Arial;
 	}
	
</style>

<h1>Code Homework # 1</h1>
<h1>By: Zane Castillo</h1>
<h2>Challenge One: Correct Change</h2>
<div>
	<p>This is my work.</p>
</div>
<p>
<?php
# Change is 258 cents
# Creating variables for exact change.
$exactchange = 258;
# Create variable for money exact change.
$dollarchange = 200;
$quarterchange = 50;
$dimechange = 0;
$nickelchange = 5;
$centchange = 3;


# Write out calculation for dollar amount.
if ($dollarchange > 100) {
	$remainder = ($dollarchange / 100);
	$dollar = $remainder;
}

# Write calculation for quarter amount.
if ($quarterchange > 25) {
	$remainder = ($quarterchange / 25);
	$quarter = $remainder;
}

# Write calculation for dime change amount.
if ($dimechange < 10){
	$remainder = ($dimechange / 10);
	$dime = $remainder;
}

# Write calclation for nickel change amount.
if ($nickelchange >= 5){
	$remainder = ($nickelchange / 5);
	$nickel = $remainder;	
}

# Write calculation for cent change.
if ($centchange > 1){
	$remainder = ($centchange / 1);
	$cent = $remainder;
}

# Now print out exact change statement.
echo "<p>Your change is 258 in total.</p>";

# Now print out correct change as a statement.
echo "<p>Your change is $dollar dollars, $quarter quarters, $dime dimes, $nickel nickel, and $cent cents.</p>"

?>

</p>

<h2>Challenge Two: 99 Bottles of Beer</h2>
<div>
	<p>This is my work.</p>
</div>
<p>
<?php

# Create a variable with the amount of bottles.
$bottles = 12;

# Create a for loop that runs the conditional and then prints out a statement that is the nursery rhyme.
for ($bottles = 12; $bottles <= 12; --$bottles){
		echo "<p>$bottles bottles of beer on the wall. $bottles bottles of beer! Take one down and pass it around. </p>";
		# Create a break in the loop so that it does not go on forever.
		if ($bottles == 0) break;
		}


?>
</p>
</body>
<footer>&copy; Zane Castillo 2020</footer>
</html>