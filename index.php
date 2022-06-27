<?php
include "inc/db.php";
session_start();
if(isset($_POST['submit'])){

	$user = $_POST['username'];
	$pass = $_POST['password'];

	$_SESSION['user'] = $user;

	$stm1 = "select * from users where name = '$user' and password = '$pass'";

	$que1 = mysqli_query($con, $stm1);
	$num = mysqli_num_rows($que1);

	if($num == 1){
		header('location:quiz1.php');
	}

}


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
<link rel = "stylesheet" type="text/css" href = "asset/css/bootstrap.min.css">
<link rel = "stylesheet" type="text/css" href = "asset/css/main6.css">

</head>
<body>
<?php include "inc/header.php";?>
<br>
<hr>
<div class="vlayer" align="center">
<video src="asset/video/hello.mp4" autoplay loop muted>
	
</video>
</div>

<hr>
<Center><legend>Login here</legend></Center>
<div class="login-form-layer">
<center>
<div class="login-form form-control">
<form action="#" method="post" enctype="">
<input class="form-group" type="text" name="username" placeholder="Email"><br>

<input type="password" name="password" placeholder="password"><br><br>
<input type="submit" name="submit" class="btn btn-default" value="Submit">

</form>
</div>
</div>
</center>

<footer>
<?php include "inc/footer.php";?>
</footer>
</body>
</html>