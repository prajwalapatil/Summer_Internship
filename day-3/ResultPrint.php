<!--DATE : 27/5/2021 TASK-6 Student Result Print DEMO-->
<html>
<body>
<?php
$sname=$_POST['sn'];
$stname=$_POST['stn'];
$s[0] = $_POST['sub1'];
$m[0] = $_POST['mark1'];
$s[1] = $_POST['sub2'];
$m[1] = $_POST['mark2'];
$s[2] = $_POST['sub3'];
$m[2] = $_POST['mark3'];
$s[3] = $_POST['sub4'];
$m[3] = $_POST['mark4'];
$s[4] = $_POST['sub5'];
$m[4] = $_POST['mark5'];


$total = $percentage = 0;

echo "<center> <h1> ..Result.. </h1> ";
echo "<table>";
echo"<tr><td bgcolor='skyblue' width='205px' height='40px' align='center'>College Name = $sname<br><br></td></tr>";
echo"<tr><td bgcolor='skyblue' width='205px' height='40px' align='center'>Student Name = $stname<br><br></td></tr>";
echo "</table>";

echo "<table>";
for($i=0;$i<5;$i++){
	echo "<tr>";
	echo "<td bgcolor='skyblue' width='100px' height='40px' align='center'>$s[$i] </td>";
	echo "<td bgcolor='lightblue' width='100px' height='40px' align='center'>$m[$i] </td>";
	$total = $total + $m[$i];
	echo "</tr>";
}

$percentage = $total/500*100;


if ($percentage >= 80) {
	echo "	<tr><td bgcolor='#75FF33' width='100px' height='30px' align='center'>Total Marks  </td> 
			<td bgcolor='#75FF33' width='100px' height='30px' align='center'>$total </td>";
	echo "	<tr><td bgcolor='#75FF33' width='100px' height='30px' align='center'>Percentage  </td> 
			<td bgcolor='#75FF33' width='100px' height='30px' align='center'>$percentage% </td>";
	echo "	<tr><td bgcolor='#75FF33' width='100px' height='30px' align='center'>Class</td> 
			<td bgcolor='#75FF33' width='100px' height='30px' align='center'>Distinction </td>";
} elseif ($percentage >=60 && $percentage < 80) {
	echo "	<tr><td bgcolor='#DBFF33' width='100px'height='30px' align='center'>Total Marks </td> 
			<td bgcolor='#DBFF33' width='100px' height='30px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='#DBFF33' width='100px'  height='30px' align='center'>Percentage  </td> 
			<td bgcolor='#DBFF33' width='100px' height='30px' align='center'>$percentage% </td>";
	echo "	<tr><td bgcolor='#DBFF33' width='100px' height='30px' align='center'>Class </td> 
			<td bgcolor='#DBFF33' width='100px' height='30px' align='center'>First Class </td>";
}elseif ($percentage >=35 && $percentage < 60) {
	echo "	<tr><td bgcolor='#FFBD33' width='100px' height='30px' align='center'>Total Marks </td> 
			<td bgcolor='#FFBD33' width='100px' height='30px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='#FFBD33' width='100px' height='30px' align='center'>Percentage  </td> 
			<td bgcolor='#FFBD33' width='100px' height='30px' align='center'>$percentage% </td>";
	echo "	<tr><td bgcolor='#FFBD33' width='100px' height='30px' align='center'>Class </td> 
			<td bgcolor='#FFBD33' width='100px' height='30px' align='center'>Second Class </td>";
}else {
	echo "	<tr><td bgcolor='#FF5733' width='100px' height='30px' align='center'>Total Marks  </td> 
			<td bgcolor='#FF5733' width='100px' height='30px' align='center'>$total</td>";
	echo "	<tr><td bgcolor='#FF5733' width='100px' height='30px' align='center'>Percentage  </td> 
			<td bgcolor='#FF5733' width='100px' height='30px' align='center'>$percentage%</td>";
	echo "	<tr><td bgcolor='#FF5733' width='100px' height='30px' align='center'>Class </td> 
			<td bgcolor='#FF5733 ' width='100px'  height='30px' align='center'>Fail </td>";
}
echo "</tr> </table> </center>";
?>