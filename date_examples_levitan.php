<?php

$break = '<br><hr><br>';

echo '&copy; '. date('Y') .' PHP Exercises - Levitan.';

echo $break;

$bday = mktime(0,0,0,9,18,2016);
//print $bday . '<br>';
$today = getdate();
//var_dump($today). '<br>';

$diff_days = (int)($bday - $today[0]);
//print $diff_days;
$days = abs((int)($diff_days/86400));
print "It is $days days till my birthday!";

echo $break;

$date = date('Y/m/d');
print $date . '<br>';
$date = date('y.m.d');
print $date . '<br>';
$date = date('d-m-y');
print $date . '<br>';

echo $break;

$date = date('Y-m-d');
print $date . '<br>';
$i = strpos($date, '-');
$year = substr($date, 0, $i);
$month_day = substr($date, $i+1);
//print $year;
//print $month_day;
$i = strpos($month_day, '-');
$month = substr($month_day, 0, $i);
$day = substr($month_day, $i+1);
print "$day-$month-$year" . '<br>';

$date = getdate();
//var_dump($date); return;
print "{$date['mday']}-{$date['mon']}-{$date['year']}" . '<br>';

//$origin = date("Y-m-d");
$origin = time();
$newdate = date("d-m-Y", $origin);
print $newdate;

echo $break;

$date = time();
$first = strtotime('first day of this month', $date);
$last = strtotime('last day of this month', $date);
print date('m/d/Y', $first). " is the first day of the month and " . date('m/d/Y', $last) . " is the last day of the month.";

echo $break;

$bday = new DateTime('1982-9-18'); // My bday!
$today = new DateTime(date('Y-m-d')); // Today mm/dd/yyyy
$diff = $today->diff($bday);
echo $diff->format("%y years, %m months, and %d days");

?>
