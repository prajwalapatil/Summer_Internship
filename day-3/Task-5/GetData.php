<!--DATE : 27/5/2021 TASK-5 Employee Registeration DEMO-->

<html>
<head>
<title>Registration Form</title>
</head>
<body bgcolor="aqua">

<h2>Your Information</h2>
<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$company=$_POST['company'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$designation=$_POST['designation'];
$technology=$_POST['technology'];
$phone=$_POST['phone'];
$address=$_POST['address'];


echo "Name : $fname $lname</br></br>";
echo "Company Name : $company</br></br>";
echo "Email : $email</br></br>";
echo "Gender : $gender</br></br>";
echo "Designation : $designation</br></br>";
echo "Technology: $technology</br></br>";
echo "Phone : $phone</br></br>";
echo "Address : $address</br></br>";

?>

</html>