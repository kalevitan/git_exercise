<?php

// Write a PHP script which will display the copyright information 
// in the following format. To get current year you can use 
// date() function.
// Expected Format : © 2013 PHP Exercises - w3resource

echo "&copy; " . date('Y'). " PHP Exercises - Wilson";
echo "<br><hr><br>";


// Create a simple 'birthday countdown' script, the script will 
// count the number of days between current day and birth day.

// $now = time();
// $bday = strtotime('This year November 9',$now);
// // Calculate the days, hours, minutes, and seconds
// $seconds = $bday - $now;
// $days = floor($seconds / 86400);
// $seconds -= $days * 86400;
// $hours = floor($seconds / 3600);
// $seconds -= $hours * 3600;
// $minutes = floor($seconds/60);
// $seconds -= $minutes *60;

$bday = mktime(0,0,0,8,29,1981);
$today = time();
$diff_days = (int)($bday - $today);
$days = abs((int)($diff_days/86400));
print "It has been $days days since my birth date.";

// // Display countdown
// echo "$days days and $hours:$minutes:$seconds remaining until birthday.";
// echo "<br><hr><br>";


// Write a PHP script to print the current date in the following 
// format. To get current date's information you can use date() 
// function. Sample format : 
// (assume current date is September 01, 2013)

// 2013/09/01
// 13.09.01
// 01-09-13
echo "<br><hr><br>";


$date = date('Y/m/d');
echo "$date";
echo "<br><hr><br>";
$date = date('y.m.d');
echo "$date";
echo "<br><hr><br>";
$date = date('d-m-y');
echo "$date";
echo "<br><hr><br>";


// Write a PHP script to convert a date from yyyy-mm-dd 
// to dd-mm-yyyy. Go to the editor Sample date : 2012-09-12

// Expected Result : 12-09-2012

$date = date('Y-m-d');
$i = strpos($date,'-');
$year = substr($date, 0, $i);
$month_day = substr($date, $i+1);
$i = strpos($month_day, '-');
$month = substr($month_day, 0,$i);
$day = substr($month_day, $i+1);
echo "$day-$month-$year";
echo "<br><hr><br>";

$date = getdate();
print "{$date['mday']}-{$date['mon']}-{$date['year']}";
echo "<br><hr><br>";

$orgin = date("Y-m-d");
$newdate = date("d-m-Y", strtotime($orgin));
print $newdate;
echo "<br><hr><br>";


$orgin = time();
$newdate = date("d-m-Y", $orgin);
print $newdate;
echo "<br><hr><br>";



// Write a PHP script to get the first and last day of a month 
// from a specified date.

$date = time();
$first = strtotime('first day of this month',$date);
print date('m/d/Y',$first)." is the first day of the month.";

$last = strtotime('last day of this month',$date);
print date('m/d/Y',$last)." is the last day of the month.";

echo "<br><hr><br>";


// Write a PHP script to calculate the current age of a person. 
// You must use the DateTime() object. Sample date of birth : 
// 11.4.1987

// Output : Your age : 27 years, 1 month, 29 days

$bday = new DateTime('4.11.1987'); //Given bday
$today = new DateTime(date('m.d.Y')); //Today in mm/dd/yyyy
$diff = $today->diff($bday);
print "Your age is: " . $diff->format("%y years, %m months, %d days");


?>

