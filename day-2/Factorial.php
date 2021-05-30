DATE : 26/5/2021 TASK-2 Factorial
<html>
<title>Factorial Of Number</title>
<body bgcolor="pink">
<form action="#" method="post">
<label>Enter Number</label>
<input type="number" name="num" value="num"> 
<br><br>
<input type="submit">
<br><br>
</html>

<?php

$number=$_POST['num'];
$factorial = 1;
$i=1;

for($i=$number; $i >= 1; $i--) {
	$factorial *= $i;
}

echo "The Factorial of Number $number is $factorial.";
?>