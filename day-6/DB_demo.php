<!--DATE : 1/6/2021 TASK-1 Database DEMO-->
<?php 
	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

if ($_POST) {
	$name = $_POST['txt1'];
	$gender = $_POST['txt2'];
	$mobile = $_POST['txt3'];

	$q = mysqli_query($connection,
		"insert into tbl_user(user_name,user_gender,user_mobile) values('{$name}','{$gender}','{$mobile}')") or die("Error". mysqli_error($connection));

	if($q){
		echo "<script>alert('Record Added');</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>	Demo DB	</title>
</head>
<body>
	<form method="post">
		Name : <input type="text" name="txt1" /><br><br>
		Gender : <select name="txt2"><option value="Male">Male</option>
		<option value="Female">Female</option></select><br><br>
		Mobile : <input type="Number" name="txt3" /><br><br>
		<input type="submit" />
	</form>
</body>
</html>