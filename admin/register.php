<?php 
include "../inc/db.php";
if(isset($_POST['submit'])){
	$target_dir = "../asset/img/";
$target_file = $target_dir . basename
( $_FILES [ "files" ][ "name" ]);

if (move_uploaded_file( $_FILES
	[ "files" ][ "tmp_name" ],
	$target_file)) {
		echo "The file " . htmlspecialchars
		( basename( $_FILES [ "files" ]
		[ "name" ])). " has been uploaded." ;


	$fname = ucfirst($_POST['firstname']);
	$lname = ucfirst($_POST['lastname']);
	$grade = $_POST['grades'];
	$user_id = $_POST['user_id'];
	$pass = $_POST['password'];

$stm5 = "insert into users(id, name, lastname, user_id, class, profile, password)values(null,'$fname', '$lname', '$user_id', '$grade', '$target_file', '$pass')";
mysqli_query($con, $stm5);

mysqli_query($con, "insert into '$grade'(id, username, firstname, lastname, userid, score, password)values(null, '$fname', '$fname', '$lname', '$user_id', '',$pass'");

}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<header>
	<?php include "inc/adm.header.php" ?>
</header>
<center>
	<div class="adm-reg form-control">
	<form action="#" method="post" enctype="multipart/form-data">
		<input class="form-control" type="file" name="files">
		<hr>
		<br>
		<label class="">First Name</label><br>
	<input class="form-control" type="text" name="firstname">	
	<br><br>
	<label>Last Name</label><br>
	<input class="form-control" type="text" name="lastname">	
	<br><br>
	<select class="form-control" id = "grades" name = "grades">
		<option>Select the class</option>
		<option>gradeone</option>
		<option>Gradetwo</option>
		<option>Gradethree</option>
		<option>Gradefour</option>
		<option>Gradefive</option>
	</select>
	<br>
	
	<input hidden type="text" name="user_id" value="<?php echo rand(111111111, 999999999);?>"><br>
	<label>Password</label>
	<br>
	<input class="form-control" type="password" name="password" placeholder="password">
	<br>

	<input class="form-control" type="password" name="password2" placeholder="repeat password">
	<br>

	<input type="submit" name="submit" value="Register">
	</form>
</div>
</center>
</body>
</html>