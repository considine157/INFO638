<!DOCTYPE html>
<html>
<head>
</head>
<body>
<title>Week 2</title>
<style>
	body{
		background-color: #C6DBEC;
		font-family: Helvetica;
		text-align: center;
		text-color: blue;
}

	
</style>

<h1>Week 3 examples</h1>
<p>This is my work.</p>

<p>
<?php
#Speeding!

#$_GET
#$_POST

$myspeed = 85;
$mybd = "0630";


do  {
	echo "You are going $myspeed";
	--$myspeed;
} while ($myspeed > 60);

# Creating a Loop that goes one time.
$knownsuser = true;
while ($knownsuser){
	$knownsuser = false;
}
# Incrementing up to 10 which is below 11
for ($c = 1; $c < 11; ++$c){
	echo "$c is $c";

}

echo date("md");

if ($mybd == date("md")){
	# get to go 5 faster!
	echo "Happy Birthday!";
	$myspeed = $myspeed - 5;
}
# 60 or less
if ($myspeed < 61) {
	echo "<div>No ticket!</div>";

# big ticket
}else if ($myspeed > 81){
	echo "<div>Big Ticket!</div>";

#everyone else
}else {
	echo "<div>Small ticket!</div>";
}
?>

</p>

<h2>Fun Class</h2>
<p>So much to learn.</p>
</body>
</html>