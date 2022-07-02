<?php include "inc/db.php";
/**
 * include "session.php";
$stm3 = "select * from users where Name = '$user'";
$stm4 = "select * from users";
$q4 = mysqli_query($con, $stm4);
$q3 = mysqli_query($con, $stm3);
$row3 = mysqli_fetch_assoc($q3);
$row4 = mysqli_fetch_assoc($q4);

$num = mysqli_num_rows($q4);
*/
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo "Precious Stones Quiz club"?></title>
	<link rel = "stylesheet" type="text/css" href = "asset/css/quiz.css">
</head>
<body>
	<div class="top-header">

</div>
<header class="heading">

<h1 class="title"><center>Precious Stones</center></h1>
<span class="logout"><a href = "inc/logout.php">Logout</a></span>

<center><h3 class="subtitle">Quiz Club</h3></center>
<?php 
include "inc/numusers.php";

?>


</header>
</body>
</html>