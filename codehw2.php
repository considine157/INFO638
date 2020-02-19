<!DOCTYPE html>
<html>
<head>
<title>Code Homework #2</title>
<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>

<h1>Code Homework #2</h1>
<h2>Challenge: ISBN Validation</h2>
<p>This is my work.</p>
<?php

#Get ISBN for challenge.

echo "Checking ISBN: 0307275930 for validity...";
echo "<p>";

#Calculate sum of ISBN by using array function for multiplying then adding numbers.

$sumisbn = array ((10*0)+(9*3)+(8*0)+(7*7)+(6*2)+(5*7)+(4*5)+(3*9)+(2*3)+(1*0));

echo array_sum($sumisbn);
echo "<p>";

#Here is the sum of the ISBN.

$divider = 11;

# Calculate division of ISBN and 11 by using divide function.

function divide($sumisbn, $divider){
	echo ($sumisbn / $divider);
}

#Call function.

echo divide(176, 11);
echo "<p>";
$total = 16;

#Now create actual function to calculate total.
function calctotal($sumisbn,$divider){};

calctotal(176, 16);
# Create if statement to see if ISBN is valid.
if ($total=16){
	echo "This is a valid ISBN!";
}elseif ($total!=16) {
	echo "This is not a valid ISBN!";
}

?>



<h2>Challenge: Coin Toss</h2>
<p>This is my work.</p>
<?php
# Random coin tosses for 1, 3, 5, 7, and 9 flips.
$coin1 = mt_rand(1,2);
for ($i=1; $i <=9; $i++){
echo "Flipping a coin \n$i times.<p>";
$i++;
	if ($coin1 == 1){
		echo "<img src='heads.jpg'><p>";
	}else{
		echo "<img src='tails.jpg'><p>";
	}
}
echo "<p>";

#Create a loop that will toss the coin repeatedly until two heads up then print out the number of tosses it took.
echo "Beginning the coin flipping...";
echo "<p>";

$coin2 = mt_rand(1,2);
for ($i=1; $i <= 1; ++$i){
	echo "Flipped two heads in a row in \n$i times. ";
	if ($coin1 == 1){
		echo "<img src='heads.jpg'><p>";
	}else{
		echo "<img src='tails.jpg'><p>";
	}
}


?>



</body>
<footer>&copy Zane Castillo, 2020</footer>
</html>