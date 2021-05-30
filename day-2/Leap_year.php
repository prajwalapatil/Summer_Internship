<?php
//DATE : 26/5/2021 TASK-7 Leap-Year
?>
<html>
<title>Leap-Year</title>
<body bgcolor="sky-blue">
<form action="#" method="post">
<label>Enter Year</label>
<input type="year" name="num" > 
<br><br>
<input type="submit">
<br><br>
</html>
<?php

$year = $_POST['num'];

if(($year%4 == 0)&&($year%100 != 0)||($year%400 == 0)) {
	echo "The Year $year is a Leap-Year.";
} else {
	echo "The Year $year is Not a Leap-Year.";
}
?>