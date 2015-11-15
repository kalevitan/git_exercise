<?php
//$trees = array("Maple", "Oak", "Dogwood", "Birch", "Cedar", "Walnut", "Pecan");

$trees[0] = "Maple";
$trees[1] = "Oak";
$trees[2] = "Dogwood";
$trees[3] = "Birch";
$trees[4] = "Cedar";
$trees[5] = "Walnut";
$trees[6] = "Poplar";

$states = array(	"NC"=>"North Carolina",
					"SC"=>"South Carolina",
					"GA"=> "Georgia"
				);

foreach ($states as $key => $value) {
	echo "The state code $key is for the state $value</p>";
}

echo $trees[5];


echo "<ul>";
for($i = 0; $i < sizeof($trees); $i++) {
	echo("<li>$trees[$i]</li>");
}
echo "</ul>";


print "<p></p>";
echo "<ul>";

foreach ($trees as $key => $value) {
	if($key == 0 || $key <=2) {
		echo("<li>$value</li>");
	}
}

echo "</ul>";



// --------------------------------------
// --------------------------------------
// --------------------------------------



$break = '<br><br>';

$taxrates = array(
  'AK' => 11.345,
  'CA' => 8.25,
  'NY' => 8.875,
  'NC' => 7.75
);

print_r($taxrates);

print $break;

echo "What are the tax rates for each state?" . "<br>";

print "CA's tax rate is: $taxrates[CA]";
print "CA's tax rate is: {$taxrates['CA']}";
print "CA's tax rate is: " . $taxrates['CA'];

print $break;

foreach ($taxrates as $rate) {
  echo "<li>$rate</li>";
}

print $break;

foreach ($taxrates as $state => $rate) {
  print "<li>$state's tax rate is: $rate</li>";
}

print $break;

$numbers = array_fill(0, 5, 8);
print_r($numbers);

print $break;

$east_coast = array_slice($taxrates, 2);
print_r($east_coast);

$deck = array('c01.png','c02.png','c03.png','c04.png',
  'c05.png','c06.png','c07.png' ,'c08.png','c09.png',
  'c10.png','c11.png','c12.png','c13.png','d01.png',
  'd02.png','d03.png','d04.png','d05.png','d06.png',
  'd07.png','d08.png','d09.png','d10.png','d11.png',
  'd12.png','d13.png','h01.png','h02.png','h03.png',
  'h04.png','h05.png','h06.png','h07.png','h08.png',
  'h09.png','h10.png','h11.png','h12.png','h13.png',
  's01.png','s02.png','s03.png','s04.png','s05.png',
  's06.png','s07.png','s08.png','s09.png','s10.png',
  's11.png','s12.png','s13.png');
print_r($deck);

shuffle($deck);

print $break;

print_r($deck);

print $break;

$player_1 = array_slice($deck, 26);
$player_2 = array_slice($deck, 0, 26);

print_r($player_1);

print $break;

print_r($player_2);

print $break;

print_r($taxrates);

// add to end of array()
array_push($taxrates, 7.8);
// add to the start of an array()
array_unshift($taxrates, 9.99);

// remove from the start of array()
array_shift($taxrates);
// remove from the end of the array()
array_pop($taxrates);

$taxrates['FL'] = 7.8;

print_r($taxrates);

$sum = array_sum($taxrates);

print $sum;

print $break;

$is_nc_there = "false";

if (array_key_exists('MA', $taxrates)) {
  $is_nc_there = "true";
}

print $is_nc_there;

print $break;


$properties = array(
  'NC' => 'Asheville',
  'NJ' => 'Canton',
  'WA' => 'Boone',
  'VA' => 'West Palm Beach',
  'FL' => 'Daytona'
);

foreach ($properties as $state => $property) {
  print "$state" . "<br>";
}

print $break;


for($i = 0; $i < 2; $i++) {

}

 ?>
