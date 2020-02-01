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
<h1>Week 2 examples</h1>
<p>This is my work.</p>
<?php

$wind_speed = 30.4;
$wind_character = "Light";
$current_condition = "It is $wind_character and $wind_speed mph, and your lunch was \$11.50";

echo $current_condition;

$is_nice_out = true;

echo $is_nice_out;

$mycalc = (int) (2453/255);
print "<p>Result is\n: ".$mycalc."</p>";

function show_weather() {
echo "It is 20 degrees";	
}

$weather_structure = array(40.7, "Sunny");
print_r($weather_structure);
print "<p>";
print_r($_SERVER);
print "</p>";



$my_firstname = "Zane";
$my_middlename = "Detron";
$my_lastname = "Castillo";
$my_age = 32;

echo $my_lastname.  $my_firstname. $my_middlename, ($my_age);
echo "<li>$my_lastname $my_firstname $my_middlename ($my_age)</li>";

$full_name = array("Castillo", "Zane", "Detron");

echo (int) ($my_firstname);

$somemum = 10;

if ($somemum == 10){

}

echo "$my_lastname. $my_firstname. $my_middlename. $my_age";

echo $my_age +=5;

$age_fiveyears = 37;

echo 2034 - $my_age;

$age_in2034 = 97;

echo 32 * 12;

$age_inmonths = 384;

echo $my_age++;






?>



<h2>Fun Class</h2>
<p>So much to learn.</p>
</body>
</html>