<!DOCTYPE html>
<html>
<head>
<title>Week4</title>

<style>
	</style>
</head>
<body>

<h1>Week 4 examples</h1>

<?php

#Reversing a string.

$mylittlestring = "Hello world!";
echo strrev($mylittlestring);
echo "<p>";

#Returns the start and gives me the number of characters back.
echo substr($mylittlestring,2,3);
echo "<p>"
;

$fullname = "Zane Detron Castillo";

#Returns my first name from the string.
echo substr($fullname, 0,4);
echo"<p>";
#Returns my middle name from the string.
echo substr($fullname, 4,7);
echo "<p>";
#Returns my last name from the string.
echo substr($fullname, 12,8);
echo "<p>";
#Return my middle name in uppercase.
echo strtoupper(substr($fullname, 4,7));
echo "<p>";
echo str_shuffle($fullname);
echo "<p>";


$fname = "Zane";
# Writing functions
function welcomeHeader($fn, $yearjoin) {
	$headhtml= "<h1>Welcome to my site ".$fn."!</h1>";

	$headhtml .="<h2>Thanks for visiting since " .$yearjoin."</h2>";
	return $headhtml;

}
#Creating a loop on the Header when we call it.
for ($i=1;$i<5; ++$i){
$result = welcomeHeader ($fname, 2019); 
}
echo $result;


#Write a fucntion that takes a meal price and desired tip percentage and returns tip.


function calcTip($mealprice, $tippercentage){
	$tippercentage = $mealprice * ($tippercentage/100);
	echo $tippercentage;



}

calcTip(250.75, 9);

for ($i=20; $i>0;--$i){
	echo "<p>".calcTip(250.75, $i). "</p>";
}



?>

</body>
</html>