<!--DATE : 29/5/2021 TASK-2 Numerical Array DEMO-->
<?php
//numerical array
//method 1
$a[0]=10;
$a[1]=20;
$a[2]=20.50;
$a[3]="c";
$a[4]="10";

//method 2 dynamic index
$a[]=10;
$a[]=20;
$a[]=20.50;
$a[]="c";
$a[]="10";

//method3
//always use this method to create an array

$a = array(10,20,30,"c","c++",10.50);

//Print array values

echo $a[3];


//print whole array

for ($i=0; $i < count($a) ; $i++) { 
	echo $a[$i]." <br/>";
}

$sum = array_sum($a);
echo "$sum  <br/>";

//3 inbuilt functions to debug an array
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";

?>
