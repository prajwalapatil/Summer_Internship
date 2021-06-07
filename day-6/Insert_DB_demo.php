<!--DATE : 1/6/2021 TASK-2 Insert Into Database DEMO-->
<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

if ($_POST) {
	$name  = $_POST['txt1'];
	$email = $_POST['txt2'];
	$mobile = $_POST['txt3'];
	$passwd = $_POST['txt4'];
	$dob = $_POST['txt5'];
	$gender = $_POST['gender'];
	$bgrp = $_POST['txt7'];
	$address = $_POST['txt8'];
	$area = $_POST['txt9'];
	$pincode = $_POST['txt10'];

	$q = mysqli_query($connection,
		"insert into tbl_student(st_name,st_email,st_mobile,st_passwd,st_dob,st_gender,st_bgrp,st_address,st_area,st_pincode) 
		values('{$name}','{$email}','{$mobile}','{$passwd}','{$dob}','{$gender}','{$bgrp}','{$address}','{$area}','{$pincode}')") 
		or die("Error". mysqli_error($connection));

	if($q){
		echo "<script>alert('Record Added');</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Insert Into Form	</title>
	<style type="text/css">
		td {
			width: 100px;
			align-items: center;
		}
	</style>
</head>
<body>
	<form method="post">
		<table align="center">
			<tr>
				<td>Name : <br/> <br/></td>
				<td><input type="text" name="txt1" /> <br/> <br/></td>
			</tr>
			<tr>
				<td>Email : <br/> <br/></td>
				<td><input type="email" name="txt2" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Mobile : <br/> <br/></td>
				<td><input type="Number" name="txt3" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Password : <br/> <br/></td>
				<td><input type="password" name="txt4" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Date of Birth : <br/> <br/></td>
				<td><input type="date" name="txt5" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Gender : <br/> <br/></td>
				<td><input type="radio" value="Male" name="gender" checked > Male   
				<input type="radio" value="Female" name="gender"> Female   </td>
			</tr>
			<tr>
				<td>Blood Group : <br/> <br/></td>
				<td><br><br><select name="txt7">
					<option value="A+">A+</option>
					<option value="B+">B+</option>
					<option value="AB+">AB+</option>
					<option value="O+">O+</option>
					<option value="A-">A-</option>
					<option value="B-">B-</option>
					<option value="AB-">AB-</option>
					<option value="O-">O-</option>
					</select><br/> <br/></td>
			</tr>
			<tr>
				<td>Address :<br/> <br/> </td>
				<td><textarea name="txt8" cols="50" rows="5"></textarea><br/> <br/></td>
			</tr>
			<tr>
				<td>Area : <br/> <br/></td>
				<td><input type="text" name="txt9" /><br/> <br/></td>
			</tr>
			<tr>
				<td>Pincode :<br/> <br/> </td>
				<td><input type="Number" name="txt10"><br/> <br/></td>
			</tr>
			<tr>
				<td><input type="submit" /></td>
				<td><input type="reset" /></td>
			</tr>
		</table>
	</form>
</body>
</html>