<html>
<head>
<title>Registration Form</title>
</head>
<body bgcolor="aqua">
<center>
<h2>Your Information</h2>
<?php

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$gender=$_POST['gender'];
$course=$_POST['Course'];
$email=$_POST['emailid'];
$dob=$_POST['dob'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$city=$_POST['City'];
$state=$_POST['State'];

echo "Name : $fname $lname</br></br>";
echo "Gender : $gender</br></br>";
echo "Course : $course</br></br>";
echo "Email : $email</br></br>";
echo "DOB : $dob</br></br>";
echo "Mobile No. : $mobile</br></br>";
echo "Address : $address $city $state </br></br>";
echo "";
?>
</center>
</html>