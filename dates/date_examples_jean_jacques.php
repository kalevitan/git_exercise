<?php 

$break = '<br><br>';
# display current date inside a string
echo 'Write a PHP script which will display the copyright information.';
echo $break;
echo "Expected Format : &copy; "  .date('Y'). " PHP Exercises - w3resource";
echo $break;

# display current in 3 different formats
echo 'Display current in 3 different formats';
echo 'The current date is:'.'</br>';
echo date('Y/M/d').'</br>';
echo date('y.m.d').'</br>';
echo date('d-m-y').'</br>';

# birthday countdown
$birth_date = mktime(0,0,0,18,11,2016);
$today = time();
$diff = ($today - $birth_date);
$days = abs((int)($diff/86400));
echo "It is $days days till my birthday";
echo $break;

# convert date format
/*
echo 'convert date format'.'<br>';
$date = '2012-09-12';
$date = strtotime($date);
echo $date.'<br>';

$date = date('Y/m/d');
print $date.'<br>';
$i = strpos($date, '_');
$year = substr($date, 0 , $i);
*/

echo 'Write a PHP script to convert a date from yyyy-mm-dd to dd-mm-yyyy. Sample date : 2012-09-12'.'<br>';

$date = date('Y/m/d');
$date = getdate();
# var_dump($date);erturn;
echo "{$date['mday']}-{$date['mon']}-{$date['year']}";
echo $break;


# 
$origin = time();
$newdate = date("d-m-Y", $origin);
echo $newdate.'<br>';
echo $break;

# Write a PHP script to get the first and last day of a month from a specified date.
echo 'Write a PHP script to get the first and last day of a month from a specified date.';
echo $break;

$date = time();
$first = strtotime('first day of this month', $date);
$last = strtotime('last day of this month', $date);
print date('m/d/Y', $first).'is the first day of the month';
print $break;
print date('m/d/Y', $last).'is the last day of the month';
print $break;


# calculate age using birth date

echo 'Calculate age using birth date'; 
$bday = new DateTime('1982-9-18'); // My bday
$today = new DateTime(date('Y-m-d'));// today mm/dd/yyyy
$diff = $today->diff($bday);
print 'Your age is: '.$diff->format('%y years, %m months, and %d days');

?>