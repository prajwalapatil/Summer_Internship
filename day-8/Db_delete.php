<!--DATE : 2/6/2021 TASK-1 Delete from Database DEMO-->
<?php 

	$host = "localhost";
	$username = "root";
	$passwd = "";
	$dbname = "db_internship";

	$connection = mysqli_connect($host, $username, $passwd, $dbname);

	$id = $_GET['deleteid'];

	$q = mysqli_query($connection,
		"update tbl_user set is_delete = 1 where user_id='{$id}'") or die("Error". mysqli_error($connection));

	if ($q) {
		echo "<script>alert('Record Deleted');window.location='Db_display.php';</script>";
	}
?>