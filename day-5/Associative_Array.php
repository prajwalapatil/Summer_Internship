<!--DATE : 31/5/2021 TASK-2 Associative Array DEMO-->
<?php
// associative array
//key = value
//method 1 

$a[0]=10;
$a['c']="computer";
$a['php']="web Development";
$a[10]="ten";
$a[50]="50.580";

//method 2
//alwayz use this method to create an array

$a = array(
	0 => 10,
	'c' => "computer",
	'php' => "web Development",
	10 => "ten",
	50 => "50.580",
);

//print value


echo "c for ".$a['c'];

foreach ($a as $value) {
	echo "value is <b>$value</b> <br/>";
}

foreach ($a as $key => $value) {
	echo "key is <b> $key </b> value is <b>$value</b> <br/>";
}

//3 inbuilt functions to debug an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";
?>
