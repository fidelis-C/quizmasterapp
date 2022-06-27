<?php
include "../inc/db.php";
$stm7 = "select * from users";
$que7 = mysqli_query($con, $stm7);

$row8 = mysqli_fetch_assoc($que7);

if(isset($_GET['update'])){
$update = $_GET['update'];
echo "<script>alert()</script>";

$stm11 = "select * from users where id = '$update'";
$que11 = mysqli_query($con, $stm11);
$row11= mysqli_fetch_assoc($que11);

if(isset($_POST['submit'])){


	$newName = $_POST['newName'];

$stm9 = "update users set Name = '$newName' where id = '$row[id]'";
mysqli_query($con, $stm9);

}


echo "<form action = 'users.php' method = 'POST'>
<input type = 'text' name = 'newName' value = {$row11['Name']}>
<input type ='submit' value = 'change name'>
</form>";
}

if(isset($_GET['del'])){
	$del = $_GET['del'];
	echo "<script>alert()</script>";
	$stm12 = "delete from users where id = '$del'";
	mysqli_query($con, $stm12);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style>
.profiles{
	width: 100px;
	height: 100px;
	border-radius: 360px;
}

.view{
	width: 500px;
	height: 300px;
	box-shadow: 10px 10px 5px lightblue;
	border: 5px solid red;
	border-radius: 70px 10px 10px 10px;
}
</style>
</head>


<body>
<header>
<?php include "inc/adm.header.php";?>
</header>
	<div align="" class = "view" style="position:absolute; left: 45%">
<?php 
if(isset($_GET['view'])){
	$view = $_GET['view'];

	$stm16 = "select * from users where id = '$view'";
	$q16 = mysqli_query($con, $stm16);
	$row16 = mysqli_fetch_assoc($q16);

	echo "<img class = 'view' src = '{$row16['profile']}'>
	<br>
	<p>{$row16['Name']}\t{$row16['lastname']}</p>

	<p>Score: {$row16['Score']}</p>";
}
?>
</div>
<?php

while($row7 = mysqli_fetch_assoc($que7)){?>
<table class="table table-striped">
	<thead>
	<tr>
		
		<th>profile</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Score</th>
		<th>Delete player</th>
		<th>Edit</th>

	</tr>
</thead>
<td><?php echo "<a href = 'users.php?view={$row7['id']}'><img class = 'profiles' src =  '{$row7['profile']}'</a>"?></td>
<td><?php echo $row7['Name']; ?></td>
<td><?php echo $row7['lastname'];?></td>
<td><?php echo $row7['Score'];?></td>
<td><a href = 'users.php?del=<?php echo $row7['id']; ?>'>
	<img src = '../asset/img/icons/delete-f.svg'>
</a></td>
<td><a href = 'users.php?update=<?php echo $row7['id']; ?>'><img src = '../asset/img/icons/pen.svg'></a></td>
</form>
	
<?php }?>


</body>
</html>