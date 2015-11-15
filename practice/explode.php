<?php

$exp = '04/2015';

$exp = explode("/", $exp);
print_r($exp);
echo '<br>test<br>';
$exp = array_reverse($exp);
print_r($exp);
echo '<br>test<br>';
$exp = implode("-", $exp);
print $exp;

echo '<br>test<br>';

$exp = '04/2015';

$month = substr($exp, 0, 2);
$year = substr($exp, 3, 4);

print $year . '-' . $month;

echo '<br><br>';



$now = new DateTime();

print $now->format('M. j, Y');

echo '<br><br>';

$now->setTime(22, 30, 00);

print $now->format('h:i:s');

echo '<br><br>';

$now = time();

print date('M. d, Y', $now);


echo '<br><br>';

$voting_age = new DateInterval('P18Y');
$dob = new DateTime('1982-09-18');
$dob->sub($voting_age);
echo 'You can vote if you were born on or before ' .
	$dob->format('n/j/y');



?>