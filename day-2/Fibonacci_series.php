<?php
//DATE : 26/5/2021 TASK-6 Fibonacci Series
?>
<html>
<title>Fibonacci Series</title>
<body bgcolor="pink">
<form action="#" method="post">
<label>Enter Number</label>
<input type="number" name="num" value="num"> 
<br><br>
<input type="submit">
<br><br>
</html>
<?php 

function Fibonacci($number){ 
	if ($number == 0) {
		return 0;	 
	} else if ($number == 1) {
		return 1;	 
	}
	else
		return (Fibonacci($number-1) + Fibonacci($number-2)); 
} 

$number = $_POST['num']; 

echo "fibonacci series upto $number number : <br>";
for ($counter = 0; $counter < $number; $counter++) { 
	echo Fibonacci($counter),', '; 
} 
?> 